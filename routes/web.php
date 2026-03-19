<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/home', function () { return view('home'); });
Route::get('/profile', function () { return view('profile'); });
Route::get('/settings', function () { return view('settings'); });
Route::get('/logout', function () { return view('logout'); });
