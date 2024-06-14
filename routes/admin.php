<?php

use Illuminate\Support\Facades\Route;


Route::get('/admin',function(){
    return view('admin.index');
});
Route::get('/admin/dashboard',function(){
    return view('admin.dashboard.index');
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
