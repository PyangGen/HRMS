<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\LeaveRequest;

class LeaveRequestController extends Controller
{
    /**
     * Show the leave request form.
     */
    public function create()
    {
        $userId = auth()->id();
        $leaveRequests = LeaveRequest::where('user_id', $userId)->get(); // Fetch the full leave request records
        
        // Generate an array of all dates between each start_date and end_date
        $leaveDates = $leaveRequests->flatMap(function ($request) {
            $dates = [];
            $start = \Carbon\Carbon::parse($request->start_date);
            $end = \Carbon\Carbon::parse($request->end_date);
    
            // Add all dates from start to end
            while ($start <= $end) {
                $dates[] = $start->toDateString(); // Add the date in "YYYY-MM-DD" format
                $start->addDay(); // Move to the next day
            }
    
            return $dates;
        })->unique()->values()->toArray(); // Unique to avoid duplicates
    
        return view('leave.request-leave', compact('leaveRequests', 'leaveDates'));
    }
    

    /**
     * Store the leave request in the database.
     */public function store(Request $request)
{
    $request->validate([
        'leave_type' => 'required|string|max:255',
        'start_date' => 'required|date|after_or_equal:today',
        'end_date' => 'required|date|after_or_equal:start_date',
        'reason' => 'required|string|max:500',
    ]);

    $userId = Auth::id();
    $start = \Carbon\Carbon::parse($request->start_date);
    $end = \Carbon\Carbon::parse($request->end_date);

    // 1. Check max date range (7 days including start and end date)
    if ($start->diffInDays($end) + 1 > 7) {
        return back()->withErrors([
            'end_date' => 'You can only request up to 7 consecutive leave days.'
        ])->withInput();
    }

    // 2. Check monthly leave request count
    $month = $start->month;
    $year = $start->year;

    $monthlyLeaveCount = LeaveRequest::where('user_id', $userId)
        ->whereMonth('start_date', $month)
        ->whereYear('start_date', $year)
        ->count();

    if ($monthlyLeaveCount >= 3) {
        return back()->withErrors([
            'start_date' => 'You have reached the maximum of 3 leave requests for this month.'
        ])->withInput();
    }

    // Save the leave request
    LeaveRequest::create([
        'user_id' => $userId,
        'leave_type' => $request->leave_type,
        'start_date' => $request->start_date,
        'end_date' => $request->end_date,
        'reason' => $request->reason,
        'status' => 'Pending',
    ]);

    return redirect()->route('leave.create')->with('success', 'Leave request submitted successfully!');
}

    /**
     * View all leave requests of the logged-in employee.
     */
    public function index()
    {
        $leaveRequests = LeaveRequest::where('user_id', Auth::id())->get();
        return view('leave.view-leave-requests', compact('leaveRequests'));
    }

    // Admin view all leave requests
    public function indexAll() {
        $leaveRequests = LeaveRequest::with('user')->get();
        return view('admin.leave.view-all-leave-requests', compact('leaveRequests'));
    }

    // Update leave request status
    public function updateStatus(Request $request) {
        $request->validate([
            'leave_id' => 'required|exists:leave_requests,id',
            'status' => 'required|in:Pending,Approved,Rejected'
        ]);
    
        $leaveRequests = LeaveRequest::findOrFail($request->leave_id);
        $leaveRequests->status = $request->status;

        if ($leaveRequests->save()) {
            session()->flash('success', 'Leave Status Updated Successfully!');
        } else {
            session()->flash('error', 'Leave Status Updated Failed!');
        }
        return response()->json(['success' => true]);
    }

    public function destroy($id)
    {
        // Find the leave request by ID
        $leaveRequest = LeaveRequest::findOrFail($id);
    
        // Delete the leave request
        if ($leaveRequest->delete()) {
            return redirect()->route('admin.leave.view-all-leave-requests')->with('success', 'Leave request deleted successfully!');
        } else {
            return redirect()->route('admin.leave.view-all-leave-requests')->with('error', 'Failed to delete leave request.');
        }
    }
    
}
