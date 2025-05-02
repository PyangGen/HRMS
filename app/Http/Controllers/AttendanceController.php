<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;


class AttendanceController extends Controller
{
    // Regular user attendance functions
    public function index()
    {
        $user = auth()->user();
    
        $attendance = Attendance::where('user_id', $user->id)
            ->whereDate('time_in', Carbon::today())
            ->first();
    
        $schedule = $user->schedule; // if using schedules
    
        $attendanceHistory = Attendance::where('user_id', $user->id)
            ->orderBy('time_in', 'desc')
            ->paginate(5); // show 5 records per page
    
        return view('attendance.index', compact('attendance', 'schedule', 'attendanceHistory', 'user'));
    }

    public function timeIn()
    {
        $user = auth()->user();
        $schedule = $user->schedule;

        if (!$schedule) {
            return back()->with('error', 'No schedule assigned to you.');
        }

        $shiftStart = Carbon::parse($schedule->shift_start);
        $now = Carbon::now('Asia/Manila');

        $existingAttendance = Attendance::where('user_id', $user->id)
            ->whereDate('time_in', $now->toDateString())
            ->first();

        if ($existingAttendance) {
            return back()->with('error', 'You have already timed in today.');
        }

        $timeDifference = $now->diffInMinutes($shiftStart, false);
        $status = $timeDifference >= -30 ? 'present' : 'absent';

        Attendance::create([
            'user_id' => $user->id,
            'time_in' => $now,
            'status' => $status,
            'request' => 'none',
            'request_approved' => 'pending',
        ]);

        return back()->with('success', 'Time in recorded as ' . ucfirst($status) . ' at ' . $now->format('h:i A'));
    }

    public function timeOut()
    {
        $attendance = Attendance::where('user_id', auth()->id())
            ->whereDate('time_in', Carbon::now('Asia/Manila')->toDateString())
            ->whereNull('time_out')
            ->first();
    
        if (!$attendance) {
            return back()->with('error', 'No active time in found.');
        }
    
        $now = Carbon::now('Asia/Manila');
    
        if ($attendance->time_in->diffInMinutes($now) < 1) {
            return back()->with('error', 'Work at least 1 minute before timing out.');
        }
    
        // Calculate hours and minutes correctly
        $diffInSeconds = $attendance->time_in->diffInSeconds($now);
        $hours = floor($diffInSeconds / 3600);
        $minutes = floor(($diffInSeconds % 3600) / 60);
        $decimalHours = $hours + ($minutes / 60);
    
        // Update attendance with time_out and calculated hours
        $attendance->update([
            'time_out' => $now,
            'hours' => round($decimalHours, 2),
        ]);
    
        return back()->with('success', 'Time out recorded at ' . $now->format('h:i A') . " — Worked: {$hours}h {$minutes}m (" . round($decimalHours, 2) . ' hours)');
    }
    
    

    // Admin attendance management functions
    public function adminIndex()
    {
        $attendances = Attendance::with('user', 'schedule')->get();
        $total = $attendances->count();
        return view('admin.attendances.index', compact('attendances', 'total'));
    }

    public function adminCreate()
    {
        $users = User::where('usertype', 'user')->get();
        return view('admin.attendances.create', compact('users'));
    }

    public function adminStore(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'time_in' => 'required|date',
            'time_out' => 'nullable|date|after:time_in',
            'hours' => 'nullable|numeric',
            'status' => 'nullable|in:present,absent,late,none',
            'request' => 'nullable|in:early_out,overtime',
            'schedule' => 'nullable|in:morning,afternoon,evening',
            'request_reason' => 'nullable|string|max:500',
            'request_approved' => 'nullable|string|max:500',
        ]);
    
        $data = $request->all();
    
        if (!empty($data['time_in']) && !empty($data['time_out'])) {
            $timeIn = Carbon::parse($data['time_in']);
            $timeOut = Carbon::parse($data['time_out']);
    
            $diffInSeconds = $timeIn->diffInSeconds($timeOut);
            $hours = floor($diffInSeconds / 3600);
            $minutes = floor(($diffInSeconds % 3600) / 60);
            $decimalHours = $hours + ($minutes / 60);
    
            $data['hours'] = round($decimalHours, 2);
        }
    
        if (!isset($data['request_approved'])) {
            $data['request_approved'] = 'pending';
        }
    
        Attendance::create($data);
    
        return redirect()->route('admin.attendances.index')->with('success', 'Attendance added.');
    }
    
    

    public function adminEdit($id)
{
    $attendance = Attendance::findOrFail($id);
    $users = User::where('usertype', 'user')->get();
    return view('admin.attendances.edit', compact('attendance', 'users'));
}

    public function adminUpdate(Request $request, $id)
    {
        $request->validate([
            'time_in' => 'required|date',
            'time_out' => 'nullable|date|after:time_in'
        ]);
        $timeIn = $request->input('time_in');
        $timeOut = $request->input('time_out');

        if ($timeIn && $timeOut) {
            $hours = Carbon::parse($timeIn)->diffInSeconds(Carbon::parse($timeOut)) / 3600;
            $data['hours'] = round($hours, 2);
        }


        $attendance = Attendance::findOrFail($id);
        $attendance->update($request->all());

        return redirect()->route('admin.attendances.index')->with('success', 'Attendance updated.');
    }

    public function adminDestroy($id)
    {
        Attendance::destroy($id);
        return back()->with('success', 'Attendance deleted.');
    }
public function submitRequest(Request $request)
{
    // Find the attendance record for the user on the current date
    $attendance = Attendance::where('user_id', auth()->id())
        ->whereDate('time_in', Carbon::today())
        ->first();

    if (!$attendance) {
        return back()->with('error', 'No attendance record found for today.');
    }

    // Prevent multiple submissions for the same day
    if ($attendance->request !== 'none') {
        return back()->with('error', 'You have already submitted a request today.');
    }

    // Validate the incoming request
    $request->validate([
        'request_type' => 'required|in:early_out,overtime',
        'request_reason' => 'required|string|max:500',
        'overtime_hours' => 'nullable|numeric|min:0',  // Validate overtime_hours (if present)
    ]);

    // Initialize overtime_hours to null
    $overtimeHours = null;

    // If the request type is "overtime", capture the overtime hours value from the form
    if ($request->request_type === 'overtime' && $request->has('overtime_hours')) {
        $overtimeHours = $request->overtime_hours;  // Capture the overtime hours from the form
    }

    // Update the attendance record with the request details and overtime hours (if any)
    $attendance->update([
        'request' => $request->request_type,
        'request_reason' => $request->request_reason,
        'request_approved' => 'pending',
        'overtime_hours' => $overtimeHours,  // Save overtime hours in the database if provided
    ]);

    return back()->with('success', 'Request submitted successfully.');
}


    public function getStatus()
{
    $attendance = Attendance::where('user_id', auth()->id())
        ->whereDate('time_in', Carbon::today())
        ->first();

    return response()->json([
        'timed_in' => $attendance ? true : false,
    ]);
}
public function updateRequestStatus(Request $request, $id)
{
    $request->validate([
        'request_approved' => 'required|in:pending,approved,rejected',
    ]);

    $attendance = Attendance::findOrFail($id);
    $attendance->request_approved = $request->request_approved;

    if ($request->request_approved === 'approved') {
        $now = Carbon::now('Asia/Manila');

        // If time_out is not set, set it now
        if (is_null($attendance->time_out) && $attendance->time_in) {
            $attendance->time_out = $now;

            // Calculate regular working hours
            $diffInSeconds = $attendance->time_in->diffInSeconds($now);
            $hours = floor($diffInSeconds / 3600);
            $minutes = floor(($diffInSeconds % 3600) / 60);
            $decimalHours = $hours + ($minutes / 60);
            $attendance->hours = round($decimalHours, 2);
        }

        // ✅ Add overtime hours to the total hours if request is for overtime
        if ($attendance->request === 'overtime' && $attendance->overtime_hours > 0) {
            $attendance->hours += $attendance->overtime_hours;
        }
    }

    if ($attendance->save()) {
        return back()->with('success', 'Status updated successfully.');
    } else {
        return back()->with('error', 'Failed to update status.');
    }
}




}
