<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/login',function(){
    return view('login.index');
});

Route::get('/admin/view-employee',function(){
    return view('admin.dashboard.employee.viewEmployee');
});
Route::get('/admin/sign-policy',function(){
    return view('admin.dashboard.employee.signPolicy');
});
Route::get('/admin/add-policy',function(){
    return view('admin.dashboard.policy.addPolicy');
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
    Route::get('/admin/add-employee',[AdminController::class,'addEmployeePage']);

});