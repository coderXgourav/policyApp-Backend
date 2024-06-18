<?php

use Illuminate\Support\Facades\Route;

Route::get('/employee',function(){
    return view('employeePanel.login');
});
Route::get('/employee/dashboard',function(){
    return view('employeePanel.dashboard.index');
});