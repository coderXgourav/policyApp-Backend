<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\McqController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PolicyAssignController;



Route::get('/login',function(){
    return view('login.index');
});






Route::group(['middleware'=>'admin'],function(){

    Route::get('/admin/dashboard',[AdminController::class,'adminDashboard']);
    Route::get('/admin/logout',[AdminController::class,'adminLogout']);

    // EMPLOYEE ROUTES 
    Route::get('/admin/add-employee',[EmployeeController::class,'addEmployeePage']);
    Route::post('/admin/add-employee',[EmployeeController::class,'addEmployee']);
    Route::get('/admin/view-employee',[EmployeeController::class,'viewEmployee']);
    Route::get('/admin/delete-employee',[EmployeeController::class,'deleteEmployee']);

    // POLICY ROUTES 
    Route::get('/admin/add-policy',[PolicyController::class,'addPolicyPage']);
    Route::post('/admin/add-policy',[PolicyController::class,'addPolicy']);
    Route::get('/admin/view-policy',[PolicyController::class,'viewPolicyPage']);
    Route::get('/admin/view-policy/{id}',[PolicyController::class,'viewPolicy']);
    Route::get('/admin/policy-visibility',[PolicyController::class,'policyVisibility']);

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
    
 
    // DEPARTMENT ROUTE 
    
    Route::get('/admin/add-department',[DepartmentController::class,'addDepartmentPage']);
    Route::get('/admin/view-department',[DepartmentController::class,'viewDepartment']);
    Route::post('/admin/add-department',[DepartmentController::class,'addDepartment']);
    Route::get('/admin/policy-send-department',[DepartmentController::class,'sendPolicyToGroup']);
    Route::post('/admin/assign-policy-to-group',[DepartmentController::class,'assignToGroup']);
    Route::get('/admin/delete-department',[DepartmentController::class,'deleteDepartment']);
    Route::get('/admin/view-assign-policy-department',[DepartmentController::class,'viewAssignedDepartment']);


    // ASSIGNMENT ROUTE 

    Route::get('/admin/assign-policy',[PolicyAssignController::class,'policyAssignPage']);
    Route::get('/admin/view-assign-policy',[PolicyAssignController::class,'viewAssignPolicy']);
    Route::get('/admin/fetch-employee',[PolicyAssignController::class,'fetchDepartmentEmployee']);
    Route::post('/admin/assign-policy',[PolicyAssignController::class,'assignPolicyToEmployee']);
    




  
    
    

    
});