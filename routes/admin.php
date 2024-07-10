<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\McqController;



Route::get('/login',function(){
    return view('login.index');
});


Route::get('/admin/sign-policy',function(){
    return view('admin.dashboard.employee.signPolicy');
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
    Route::get('/admin/view-policy',[PolicyController::class,'viewPolicyPage']);
    Route::get('/admin/view-policy/{id}',[PolicyController::class,'viewPolicy']);

    // MCQ ROUTES 
     Route::get('/admin/add-mcq',[McqController::class,'addMcqPage']);
     Route::post('/admin/add-mcq',[McqController::class,'addMcq']);
     Route::get('/admin/view-mcq',[McqController::class,'viewMcq']);
     Route::get('/admin/show-question/{id}',[McqController::class,'showMcq']);


    // MARKS ROUTE 

    Route::get('/admin/set-mcq-marks',[McqController::class,'setMarks']);
    Route::post('/admin/set-marks',[McqController::class,'setPassMark']);
    Route::get('/admin/fetch-no-of-question',[McqController::class,'showNumberOfQuestion']);
    Route::get('/admin/view-mcq-marks',[McqController::class,'viewSetMarks']);
    
// Route::get('/admin/set-mcq-marks',function(){
//     return view('admin.dashboard.mcq.setMcqMarks');
// });
    

    
});