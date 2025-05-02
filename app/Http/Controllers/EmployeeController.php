<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Payroll;

class EmployeeController extends Controller
{
    public function index()
    {
        // Get only employees
        $employees = User::where('usertype', 'user')->orderBy('id', 'asc')->get();

        return view('employee.index', compact('employees'));
    }

    public function profile()
    {
        $user = Auth::user(); // Logged-in user

        if (!$user || $user->usertype !== 'user') {
            abort(403, 'Unauthorized access.');
        }

        // ✅ Get the payrolls for the logged-in user
        $payrolls = Payroll::where('user_id', $user->id)->get();

        // ✅ Pass both user and payrolls to the view
        return view('employee.profile', compact('user', 'payrolls'));
    }

}
