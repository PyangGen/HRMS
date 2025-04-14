<?php

namespace App\Http\Controllers;

use App\Models\Payroll;
use App\Models\User;
use Illuminate\Http\Request;

class PayrollController extends Controller
{
    public function index()
    {
        $payrolls  = Payroll::orderBy('id', 'asc')->get();
        $total = Payroll::count();
        return view('admin.payroll.index', compact(['payrolls', 'total']));
    }
    public function create()
    {
        $users = User::where('usertype', 'user')->get();
        return view('admin.payroll.create', compact('users'));
    }
    public function save(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|exists:users,name',
            'salary' => 'required|numeric|min:1000',
            'bonus' => 'nullable|numeric|min:500',
            'pay_date' => 'required|date'
        ]);
        $users = User::where('name', $validation['name'])
            ->where('usertype', 'user')
            ->first();
        ;
        if (!$users) {
            return redirect()->route('admin/payrolls/create')->with('error', 'Invalid user selection.');
        }
        $payDate = $validation['date'] ?? now()->toDateString();
        $payroll = Payroll::create([
            'name' => $users->name,
            'salary' => $validation['salary'],
            'bonus' => $validation['bonus'] ?? 0,
            'pay_date' => $payDate,
        ]);
        if ($payroll) {
            session()->flash('success', 'Payroll Added Successfully');
            return redirect(route('admin/payrolls'));
        } else {
            session()->flash('error', 'Some problem occure');
            return redirect(route('admin/payrolls/create'));
        }
    }
    public function edit($id)
    {
        $payrolls = Payroll::findOrFail($id);
        $users = User::where('usertype', 'user')->get();
        return view('admin.payroll.update', compact('payrolls', 'users'));
    }
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'salary' => 'required|numeric|min:1000',
            'bonus' => 'nullable|numeric|min:500',
            'pay_date' => 'required|date',
        ]);
        $payrolls = Payroll::findOrFail($id);

        $payrolls->salary = $validation['salary'];
        $payrolls->bonus = $validation['bonus'];
        $payrolls->pay_date = $validation['pay_date'];
        $updated = $payrolls->save();
        if ($updated) {
            session()->flash('success', 'Payroll Updated Successfully');
            return redirect(route('admin/payrolls'));
        } else {
            session()->flash('error', 'Some problem occure');
            return redirect(route('admin/payrolls/update'));
        }
    }
    public function delete($id)
    {
        $payrolls = Payroll::findOrFail($id)->delete();

        if ($payrolls) {
            session()->flash('success', 'Payroll Deleted Successfully');
            return redirect(route('admin/payrolls'));
        } else {
            session()->flash('error', 'Payroll not delete successfully');
            return redirect(route('admin/payrolls'));
        }
    }
}
