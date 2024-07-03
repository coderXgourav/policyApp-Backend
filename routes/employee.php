<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController; 
use App\Http\Controllers\EmployeeController; 



Route::get('/employee/view-policy',function(){
    return view('employeePanel.dashboard.policy.viewPolicy');
});
Route::get('/employee/test-mcq',function(){
    return view('employeePanel.dashboard.mcq.mcqpage');
});


Route::post('/login',[LoginController::class,'login']);



Route::group(['middleware'=>'employee'],function(){

    Route::get('/employee/dashboard',[EmployeeController::class,'employeeDashboard']);
    Route::get('/employee/logout',[EmployeeController::class,'employeeLogout']);


});

