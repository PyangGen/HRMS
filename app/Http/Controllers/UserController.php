<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\User;
use Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $query = User::query();
    
        if ($request->has('search') && $request->search != '') {
            $searchTerm = $request->search;
    
            $query->where(function ($q) use ($searchTerm) {
                $q->where('name', 'like', "%{$searchTerm}%")
                  ->orWhere('department', 'like', "%{$searchTerm}%");
            });
        }
    
        $users = $query->orderBy('id', 'desc')->paginate(8);
        $total = $query->count();
    
        $departments = Department::all();
        return view('admin.users.index', compact('users', 'total', 'departments'));
    }
    public function create()
    {
        return view('admin.users.create');
    }
   
    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view('admin.users.update', compact('users'));
    }public function update(Request $request, $id)
{
    $users = User::findOrFail($id);

    $users->name = $request->name;
    $users->email = $request->email;
    $users->department = $request->department;
    $users->position = $request->position;
    $users->gender = $request->gender;
    $users->contact_number = $request->contact_number;

    if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if ($users->image && file_exists(public_path('storage/' . $users->image))) {
            unlink(public_path('storage/' . $users->image));
        }

        // Store the new image and save the path
        $imagePath = $request->file('image')->store('users', 'public');
        $users->image = $imagePath;
    }

    if ($users->save()) {
        session()->flash('success', 'Employee updated successfully.');
        return redirect()->route('admin/users');
    } else {
        session()->flash('error', 'Something went wrong.');
        return redirect()->route('admin/users');
    }
}


public function store(Request $request)
{
    // Validate input
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed',
        'department' => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'gender' => ['required', 'string', 'max:255'],
        'contact_number' => ['required', 'string', 'max:12'],
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->department = $request->department;
    $user->position = $request->position;
    $user->gender = $request->gender;
    $user->contact_number = $request->contact_number;

    // Check if image is uploaded
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('users', 'public');
        $user->image = $imagePath;
    } else {
        $user->image = null;
    }

    $user->save();

    return redirect()->back()->with('success', 'Employee added successfully!');
}

    public function updateRole(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'usertype' => 'required|in:user,admin',
        ]);
        $users = User::findOrFail($request->user_id);
        $users->usertype = $request->usertype;
        if ($users->save()) {
            session()->flash('success', 'Employee "' . $users->name . ' ' . '" Updated Successfully!');
        } else {
            session()->flash('error', 'Employee "' . $users->name . ' ' . '" Updated Failed!');
        }
        return response()->json(['success' => true]);
    }

    public function delete($id)
    {
        $users = User::findOrFail($id)->delete();

        if ($users) {
            session()->flash('success', 'Employee Deleted Successfully');
            return redirect(route('admin/users'));
        } else {
            session()->flash('error', 'Employee not delete successfully');
            return redirect(route('admin/users'));
        }
    }

}


/*  public function save(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'department' => ['required', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'contact_number' => ['required', 'string', 'max:12'],
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imageName = 'default.jpg';

        // Check if image is uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/users/'), $imageName);
        }

        $user = User::create([
            'name' => $request->name,
            'department' => $request->department,
            'position' => $request->position,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'contact_number' => $request->contact_number,
            'image' => $imageName,
        ]);

        event(new Registered($user));

        if ($user) {
            session()->flash('success', 'Employee Add Successfully');
            return redirect(route('admin/users'));
        } else {
            session()->flash('error', 'Some problem occure');
            return redirect(route('admin/users/create'));
        }
    } */