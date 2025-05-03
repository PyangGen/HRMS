<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LeaveRequestController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/employees', [EmployeeController::class, 'index'])->name('employee/index');
    Route::get('/employee/profile', [EmployeeController::class, 'profile'])->name('employee/profile');


    Route::get('/leave/request', [LeaveRequestController::class, 'create'])->name('leave.create');
    Route::post('/leave/request', [LeaveRequestController::class, 'store'])->name('leave.store');
    Route::get('/leave/view', [LeaveRequestController::class, 'index'])->name('leave.index');

    // Regular user attendance routes
    Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance.index');
    Route::post('/attendance/time-in', [AttendanceController::class, 'timeIn'])->name('attendance.timeIn');
    Route::post('/attendance/time-out', [AttendanceController::class, 'timeOut'])->name('attendance.timeOut');
    Route::post('/attendance/submit-request', [AttendanceController::class, 'submitRequest'])->name('attendance.submitRequest');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
    Route::get('admin/departments', [DepartmentController::class, 'index'])->name('admin/departments');
    Route::get('admin/departments/create', [DepartmentController::class, 'create'])->name('admin/departments/create');
    Route::post('admin/departments/save', [DepartmentController::class, 'save'])->name('admin/departments/save');
    Route::put('/admin/departments/update/{id}', [DepartmentController::class, 'update'])->name('departments.update');
    Route::get('admin/departments/edit/{id}', [DepartmentController::class, 'edit'])->name('admin/departments/edit');
    Route::put('admin/departments/edit/{id}', [DepartmentController::class, 'update'])->name('admin/departments/update');
    Route::delete('/admin/departments/delete/{id}', [DepartmentController::class, 'destroy'])->name('departments.destroy');

    
    Route::get('admin/users', [UserController::class, 'index'])->name('admin/users');
    Route::get('admin/users/create', [UserController::class, 'create'])->name('admin/users/create');
    Route::post('admin/users/save', [UserController::class, 'store'])->name('admin/users/save');
    Route::get('admin/users/edit/{id}', [UserController::class, 'edit'])->name('admin/users/edit');
    Route::put('/admin/users/update/{id}', [UserController::class, 'update'])->name('admin/users/update');
    Route::post('admin/users/updateRole', [UserController::class, 'updateRole'])->name('admin/users/updateRole');
    Route::get('admin/users/delete/{id}', [UserController::class, 'delete'])->name('admin/users/delete');

    // Admin Attendance Routes 
    Route::get('admin/attendances', [AttendanceController::class, 'adminIndex'])->name('admin/attendances');
    Route::get('admin/attendances/create', [AttendanceController::class, 'adminCreate'])->name('admin/attendances/create');
    Route::post('admin/attendances', [AttendanceController::class, 'adminStore'])->name('admin.attendances.store');
    Route::get('admin/attendances/edit/{id}', [AttendanceController::class, 'adminEdit'])->name('admin/attendances/edit');
    Route::put('admin/attendances/{id}', [AttendanceController::class, 'adminUpdate'])->name('admin.attendances.update');
    Route::delete('admin/attendances/delete/{id}', [AttendanceController::class, 'adminDestroy'])->name('admin/attendances/delete');
    Route::get('/attendance/status', [AttendanceController::class, 'getStatus'])->name('attendance.status');
    Route::put('admin/attendances/update-request-status/{id}', [AttendanceController::class, 'updateRequestStatus'])->name('attendance.updateRequestStatus');
 


    Route::get('admin/payrolls', [PayrollController::class, 'index'])->name('admin/payrolls');
    Route::get('admin/payrolls/create', [PayrollController::class, 'create'])->name('admin/payrolls/create');
    Route::post('admin/payrolls/save', [PayrollController::class, 'save'])->name('admin/payrolls/save');
    Route::get('admin/payrolls/edit/{id}', [PayrollController::class, 'edit'])->name('admin/payrolls/edit');
    Route::put('admin/payrolls/edit/{id}', [PayrollController::class, 'update'])->name('admin/payrolls/update');
    Route::delete('admin/payroll/{id}', [PayrollController::class, 'destroy'])->name('admin/payroll/destroy');
    Route::post('admin/payrolls/store', [PayrollController::class, 'store'])->name('admin/payrolls/store');
    Route::get('/get-user-data/{id}', [App\Http\Controllers\PayrollController::class, 'getUserData']);
    Route::get('admin.payroll.index', [PayrollController::class, 'index'])->name('admin.payroll.index');
    Route::get('/admin/payrolls/fetch-hours', [PayrollController::class, 'fetchHours']);

    


    Route::get('/admin/leave-requests', [LeaveRequestController::class, 'indexAll'])->name('admin.leave.view-all-leave-requests');
    Route::post('/admin/update-leave-requests', [LeaveRequestController::class, 'updateStatus'])->name('admin.leave.update-leave-status');
    // This route must handle DELETE requests
        Route::delete('/admin/leave-requests/{id}', [LeaveRequestController::class, 'destroy'])->name('admin.leave.delete');
    

    Route::get('/admin/schedules', [ScheduleController::class, 'index'])->name('admin/schedules');
    Route::get('/admin/schedules/create', [ScheduleController::class, 'create'])->name('admin/schedules/create');
    Route::post('/admin/schedules', [ScheduleController::class, 'store'])->name('admin/schedules/store');
    Route::post('/admin/schedules/{id}/{status}', [ScheduleController::class, 'updateStatus'])->name('admin/schedules/updateStatus');
    Route::get('/admin/schedules/approve/{id}', [ScheduleController::class, 'approve'])->name('admin/schedules/approve');
    Route::get('/admin/schedules/reject/{id}', [ScheduleController::class, 'reject'])->name('admin/schedules/reject');
    Route::put('/admin/schedules/update', [ScheduleController::class, 'update'])->name('admin/schedules/update');
    Route::get('/admin/schedules/delete/{id}', [ScheduleController::class, 'destroy'])->name('admin/schedules/delete');


});

require __DIR__.'/auth.php';

//Route::get('admin/dashboard', [HomeController::class, 'index']);
//Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);
