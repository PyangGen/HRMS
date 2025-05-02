<?php

namespace App\Http\Controllers;

use App\Models\Payroll;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Attendance;
use Carbon\Carbon;
class PayrollController extends Controller
{
    public function index()
    {
        $total = Payroll::count();
        $users = User::where('usertype', 'user')->get(); // ← add this
        $payrolls = Payroll::with('user')->orderBy('id', 'desc')->paginate(8);

        return view('admin.payroll.index', compact('payrolls', 'total', 'users'));
    }
    
    public function create()
    {
        $users = User::where('usertype', 'user')->get();
        return view('admin.payroll.create', compact('users'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'total_hours' => 'required|numeric',
            'salary_per_hour' => 'required|numeric',
            // other validation...
        ]);
    
        // Get current payroll month and year
        $now = Carbon::now();
        $month = $now->month;
        $year = $now->year;
    
        // Check if payroll already exists for the user for the current month/year
        $existingPayroll = Payroll::where('user_id', $request->user_id)
            ->whereMonth('created_at', $month)
            ->whereYear('created_at', $year)
            ->first();
    
        if ($existingPayroll) {
            return back()->with('error', 'Payroll for this employee already exists for this month.');
        }
    
        // Proceed to store the payroll if no duplicate
        Payroll::create([
            'user_id' => $request->user_id,
            'total_hours' => $request->total_hours,
            'salary_per_hour' => $request->salary_per_hour, // <-- add this line
            'salary' => $request->total_hours * $request->salary_per_hour,
            'total_deductions' => $request->total_deductions,
            'net_salary' => $request->net_salary,
        ]);
        
    
        return back()->with('success', 'Payroll added successfully!');
    }
    
    
public function getUserData($id)
{
    $user = User::findOrFail($id);

    // Sum total hours from attendances table
    $totalHours = Attendance::where('user_id', $id)->sum('hours');

    return response()->json([
        'name' => $user->name,
        'total_hours' => $totalHours
    ]);
}
public function destroy($id)
{
    $payroll = Payroll::findOrFail($id);
    $payroll->delete();

    return response()->json(['message' => 'Payroll deleted successfully.']);
}


}
