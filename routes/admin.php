<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PolicyController;



Route::get('/login',function(){
    return view('login.index');
});


Route::get('/admin/sign-policy',function(){
    return view('admin.dashboard.employee.signPolicy');
});

Route::get('/admin/view-policy',function(){
    return view('admin.dashboard.policy.viewPolicy');
});

Route::get('/admin/add-mcq',function(){
    return view('admin.dashboard.mcq.addMcq');
});
Route::get('/admin/set-mcq-marks',function(){
    return view('admin.dashboard.mcq.setMcqMarks');
});

Route::group(['middleware'=>'admin'],function(){

    Route::get('/admin/dashboard',[AdminController::class,'adminDashboard']);
    Route::get('/admin/logout',[AdminController::class,'adminLogout']);

    // EMPLOYEE ROUTES 
    Route::get('/admin/add-employee',[EmployeeController::class,'addEmployeePage']);
    Route::post('/admin/add-employee',[EmployeeController::class,'addEmployee']);
    Route::get('/admin/view-employee',[EmployeeController::class,'viewEmployee']);

    // POLICY ROUTES 
    Route::get('/admin/add-policy',[PolicyController::class,'addPolicyPage']);
    Route::post('/admin/add-policy',[PolicyController::class,'addPolicy']);

});