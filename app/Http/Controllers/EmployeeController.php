<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user(); // Ensure it's a single user object

        if (!$user || $user->usertype !== 'user') {
            abort(403, 'Unauthorized access.');
        }

        return view('employee.profile', compact('user'));
    }

}
