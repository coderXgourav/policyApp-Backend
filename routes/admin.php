<?php

use Illuminate\Support\Facades\Route;


Route::get('/admin',function(){
    return view('admin.index');
});
Route::get('/admin/dashboard',function(){
    return view('admin.dashboard.index');
});