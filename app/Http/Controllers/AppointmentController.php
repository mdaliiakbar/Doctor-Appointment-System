<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function schedule()
    {
        return view("appointment.schedule");
    }

    public function checkout()
    {
        return view("appointment.checkout");
    }

    public function booking_success()
    {
        return view("appointment.success");
    }

    public function invoice()
    {
        return view("appointment.invoice");
    }
}
