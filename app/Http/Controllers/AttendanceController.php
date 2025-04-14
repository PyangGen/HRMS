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
        $attendance = Attendance::where('user_id', auth()->id())
            ->whereDate('time_in', Carbon::today())
            ->first();
    
        return view('attendance.index', compact('attendance'));
    }
    


    public function timeIn()
    {
        $user = auth()->user();
        $schedule = $user->schedule; // Assuming a relationship exists between User and Schedule
    
        if (!$schedule) {
            return back()->with('error', 'No schedule assigned to you.');
        }
    
        $shiftStart = \Carbon\Carbon::parse($schedule->shift_start);
        $now = \Carbon\Carbon::now('Asia/Manila');
    
        // Check if the user already timed in today
        $existingAttendance = Attendance::where('user_id', $user->id)
            ->whereDate('time_in', $now->toDateString())
            ->first();
    
        if ($existingAttendance) {
            return back()->with('error', 'You have already timed in today.');
        }
    
        // Determine the status based on the time difference
        $timeDifference = $now->diffInMinutes($shiftStart, false); // Negative if late
        $status = $timeDifference >= -30 ? 'present' : 'absent';
    
        // Create the attendance record
        Attendance::create([
            'user_id' => $user->id,
            'time_in' => $now,
            'status' => $status,
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

    if ($attendance->time_in->diffInMinutes(Carbon::now('Asia/Manila')) < 1) {
        return back()->with('error', 'Work at least 1 minute before timing out.');
    }

    $attendance->update(['time_out' => Carbon::now('Asia/Manila')]); // Use Philippine timezone

    return back()->with('success', 'Time out recorded at ' . Carbon::now('Asia/Manila')->format('h:i A'));
}
    // Admin attendance management functions
    public function adminIndex()
    {
        $attendances = Attendance::with('user', 'schedule')->get(); // Fetch attendance records
        $total = $attendances->count(); // Calculate total records
    
        return view('admin.attendances.index', compact('attendances', 'total')); // Pass $total to the view
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
            'status' => 'nullable|in:present,absent,late,none',
            'request' => 'nullable|in:early_out,late_in,none',
            'schedule' => 'nullable|in:morning,afternoon,evening',
            'request_reason' => 'nullable|string|max:500',
            'request_approved' => 'nullable|boolean',
        ]);

        Attendance::create($request->all());

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
        $attendance = Attendance::where('user_id', auth()->id())
            ->whereDate('time_in', Carbon::today())
            ->first();
    
        if (!$attendance) {
            return back()->with('error', 'No attendance record found for today.');
        }
    
        $request->validate([
            'request_type' => 'required|in:early_out,late_in',
            'request_reason' => 'required|string|max:500',
        ], [
            'request_type.required' => 'Please input the field.',
            'request_reason.required' => 'Please input the field.',
        ]);
    
        $attendance->update([
            'request' => $request->request_type,
            'request_reason' => $request->request_reason,
            'request_approved' => false
        ]);
    
        return back()->with('success', 'Request submitted successfully.');
    }
    
}