<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function patient_login()
    {
        return view("patient.login");
    }
    public function patient_register()
    {
        return view("patient.register");
    }
    public function doctor_login()
    {
        return view("doctor.login");
    }
    public function doctor_register()
    {
        return view("doctor.register");
    }
    public function login(Request $request)
    {

    }
}
