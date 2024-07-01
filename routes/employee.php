<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


Route::get('/employee/dashboard',function(){
    return view('employeePanel.dashboard.index');
});
Route::get('/employee/view-policy',function(){
    return view('employeePanel.dashboard.policy.viewPolicy');
});
Route::get('/employee/test-mcq',function(){
    return view('employeePanel.dashboard.mcq.mcqpage');
});


Route::post('/login',[LoginController::class,'login']);