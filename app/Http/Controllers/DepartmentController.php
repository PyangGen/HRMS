<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index(){
        $departments = Department::orderBy('id', 'desc')->paginate(8);
        $total = Department::count();
        return view('admin.department.home', compact(['departments', 'total']));
    }
    public function create(){
        return view('admin.department.create');
    }
    public function save(Request $request)
    {
        // Validate the request, ensuring 'dept_name' is unique in the departments table
        $validation = $request->validate([
            'dept_name' => 'required|unique:departments,dept_name',  // Ensure dept_name is unique in the 'departments' table
            'dept_head' => 'required',
            'dept_desc' => 'required',
        ], [
            // Custom error message for the 'dept_name' uniqueness check
            'dept_name.unique' => 'The department name has already been taken.',
        ]);
    
        // Create the department with the validated data
        $data = Department::create($validation);
    
        // Check if the department was created successfully
        if ($data) {
            session()->flash('success', 'Department Added Successfully');
            return redirect(route('admin/departments'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin/departments/create'));
        }
    }
    
    public function edit($id){
        $departments = Department::findOrFail($id);
        return view('admin.department.update', compact('departments'));
    }
    public function update(Request $request, $id)
    {
        // Validate input
        $request->validate([
            'dept_name' => 'required|string|max:255',
            'dept_head' => 'required|string|max:255',
            'dept_desc' => 'required|string|max:500',
        ]);

        // Find the department by ID
        $department = Department::findOrFail($id);

        // Update department details
        $department->update([
            'dept_name' => $request->dept_name,
            'dept_head' => $request->dept_head,
            'dept_desc' => $request->dept_desc,
        ]);

        // Return JSON response
        return response()->json(['success' => true, 'message' => 'Department updated successfully!']);
    }
    public function destroy($id)
{
    try {
        $department = Department::findOrFail($id);

        // Check if department is found before trying to delete
        if (!$department) {
            return response()->json([
                'success' => false,
                'message' => 'Department not found.'
            ], 404);
        }

        $department->delete();  // Attempt to delete the department

        return response()->json([
            'success' => true,
            'message' => 'Department deleted successfully!'
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Failed to delete department: ' . $e->getMessage()
        ], 500);
    }
}

    

}
