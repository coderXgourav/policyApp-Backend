<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController; 
use App\Http\Controllers\EmployeeController; 








Route::get('/employee/test-mcq',function(){
    return view('employeePanel.dashboard.mcq.mcqpage');
});


Route::post('/login',[LoginController::class,'login']);



Route::group(['middleware'=>'employee'],function(){

    Route::get('/employee/dashboard',[EmployeeController::class,'employeeDashboard']);
    Route::get('/employee/logout',[EmployeeController::class,'employeeLogout']);
    
    Route::get('/employee/view-policy',[EmployeeController::class,'viewAssignedPolicy']);
    Route::get('/employee/view-policy/{id}',[EmployeeController::class,'viewPolicyByEmployee']);

    Route::get('/employee/policy-test/{id}',[EmployeeController::class,'viewPolicyQuestions']);
    Route::get('/employee/view-department-policy/{id}',[EmployeeController::class,'departmentWisePolicy']);
    Route::post('/employee/submit-mcq',[EmployeeController::class,'policyTestSubmit']);
    Route::get('/employee/send-answer',[EmployeeController::class,'mcqCheck']);


});