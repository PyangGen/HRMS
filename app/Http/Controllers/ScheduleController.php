<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
class ScheduleController extends Controller
{
    public function index(Request $request)
    {
        $query = Schedule::query();
    
        if ($request->has('search') && $request->search != '') {
            $searchTerm = $request->search;
    
            $query->whereHas('user', function ($q) use ($searchTerm) {
                $q->where('name', 'like', "%{$searchTerm}%");
            })->orWhere('shift', 'like', "%{$searchTerm}%")
              ->orWhere('schedule', 'like', "%{$searchTerm}%");
        }
    
        $schedules = $query->orderBy('id', 'desc')->paginate(7);
        $users = User::where('usertype', 'user')->get();
        $total = $query->count();
    
        return view('admin.schedule.index', compact('schedules', 'users', 'total'));
    }
    
    
    public function create()
    {
        $users = User::where('usertype', 'user')->get();
        return view('admin.schedule.create', compact('users'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'shift' => 'required|string',
            'shift_start' => 'required',
            'shift_end' => 'required|after:shift_start',
            'status' => 'nullable|in:present,absent,late,none',
            'request' => 'nullable|in:early_out,late_in,none',
            'schedule' => 'nullable|in:morning,afternoon,evening',
            'request_reason' => 'nullable|string',
            'request_approved' => 'nullable|boolean',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('form_error', 'add');
        }
    
        // ✅ Check if user already has a schedule
        $existingSchedule = Schedule::where('user_id', $request->user_id)->first();
        if ($existingSchedule) {
            return redirect()->back()
                ->withErrors(['user_id' => 'This employee already has an existing schedule.'])
                ->withInput()
                ->with('form_error', 'add');
        }
    
        // ✅ Duration validation
        $start = \Carbon\Carbon::createFromFormat('H:i', $request->shift_start);
        $end = \Carbon\Carbon::createFromFormat('H:i', $request->shift_end);
        $duration = $start->diffInHours($end);
    
        if (
            ($request->shift === 'part-time' && ($duration < 4 || $duration > 6)) ||
            ($request->shift === 'full-time' && ($duration < 7 || $duration > 8))
        ) {
            return redirect()->back()
                ->withErrors([
                    'duration' => 'Please ensure the duration is:
                        - 4 to 6 hours for Part-time
                        - 7 to 8 hours for Full-time'
                ])
                ->withInput()
                ->with('form_error', 'add');
        }
    
        Schedule::create($request->all());
    
        return redirect()->route('admin/schedules')->with('success', 'Schedule added successfully!');
    }
    
    
    public function updateStatus($id, $status)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->update(['status' => $status]);

        return redirect()->route('admin/schedules')->with('success', 'Schedule updated successfully!');
    }


    public function update(Request $request)
    {
        $input = $request->all();
    
        // Determine schedule based on shift
        if ($request->shift === 'full-time' && $request->shift_start) {
            $hour = (int) explode(':', $request->shift_start)[0];
            // Full-time only uses morning or afternoon
            $input['schedule'] = ($hour < 12) ? 'morning' : 'afternoon';
        } elseif ($request->shift === 'part-time' && in_array($request->shift_type, ['morning', 'afternoon', 'evening'])) {
            // Part-time uses selected shift_type (including evening)
            $input['schedule'] = $request->shift_type;
        }
    
        $validator = Validator::make($input, [
            'id' => 'required|exists:schedules,id',
            'user_id' => 'required|exists:users,id',
            'shift' => 'required|in:full-time,part-time',
            'shift_type' => 'required_if:shift,part-time|in:morning,afternoon,evening',
            'shift_start' => 'required',
            'shift_end' => 'required|after:shift_start',
            'schedule' => 'nullable|in:morning,afternoon,evening',
        ]);
    
        if ($validator->fails()) {
            $schedule = Schedule::find($request->id);
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('form_error', 'edit')
                ->with('user_name', $schedule?->user?->name);
        }
    
        $schedule = Schedule::findOrFail($request->id);
        $schedule->update($input);
    
        return redirect()->back()->with('success', 'Schedule updated successfully!');
    }
    

    public function approve($id)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->update(['status' => 'approved']);

        return redirect()->route('admin/schedules')->with('success', 'Schedule approved successfully!');
    }

    public function reject($id)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->update(['status' => 'rejected']);

        return redirect()->route('admin/schedules')->with('success', 'Schedule rejected successfully!');
    }

    public function destroy($id)
{
    $schedule = Schedule::find($id);

    if (!$schedule) {
        return redirect()->back()->with('error', 'Schedule not found.');
    }

    $schedule->delete();

    return redirect()->back()->with('success', 'Schedule deleted successfully.');
}
}
