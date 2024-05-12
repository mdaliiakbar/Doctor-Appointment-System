<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('login', "App\Http\Controllers\AuthController@index")->name('login');
Route::get('register', "App\Http\Controllers\AuthController@register")->name('register');
Route::get('doctors', "App\Http\Controllers\DoctorsController@index")->name('doctors');
