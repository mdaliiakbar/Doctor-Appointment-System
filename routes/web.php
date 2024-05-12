<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('doctors', "App\Http\Controllers\DoctorsController@index")->name('doctors');

Route::get('patient-login', "App\Http\Controllers\AuthController@patient_login")->name('patient-login');
Route::get('patient-register', "App\Http\Controllers\AuthController@patient_register")->name('patient-register');

Route::get('doctor-login', "App\Http\Controllers\AuthController@doctor_login")->name('doctor-login');
Route::get('doctor-register', "App\Http\Controllers\AuthController@doctor_register")->name('doctor-register');

Route::get('schedule', "App\Http\Controllers\AppointmentController@schedule")->name('schedule');
Route::get('checkout', "App\Http\Controllers\AppointmentController@checkout")->name('checkout');
Route::get('booking-success', "App\Http\Controllers\AppointmentController@booking_success")->name('booking-success');
Route::get('invoice', "App\Http\Controllers\AppointmentController@invoice")->name('invoice');
