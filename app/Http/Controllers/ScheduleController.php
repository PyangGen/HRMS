<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\User;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::with('user')->get();
        $users = User::where('usertype', 'user')->get(); // Fetch users here
        return view('admin.schedule.index', compact('schedules', 'users')); // Pass both to the view
    }
    
    public function create()
    {
        $users = User::where('usertype', 'user')->get();
        return view('admin.schedule.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
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
    
        // Check if the employee already has a schedule
        $existingSchedule = Schedule::where('user_id', $request->user_id)->exists();
    
        if ($existingSchedule) {
            return back()->with('error', 'This employee already has a schedule and cannot be assigned again.');
        }
    
        // Create the schedule if no existing schedule is found
        Schedule::create($request->all());
    
        return redirect()->route('admin/schedules')->with('success', 'Schedule added successfully!');
    }
    
    public function updateStatus($id, $status)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->update(['status' => $status]);

        return redirect()->route('admin/schedules')->with('success', 'Schedule updated successfully!');
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

}
