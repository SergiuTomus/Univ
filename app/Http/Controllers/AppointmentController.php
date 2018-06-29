<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointments; 

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function appointment(){
        return view('pages.appointment');
    }

    public function getAppointments() 
    {
        $appointments = Appointments::all();
        return response()->json(array('appointments'=> $appointments), 200);
    }
}
