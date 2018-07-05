<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointments; 
use App\Courses;
use App\Halls;
use DB;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function appointment(){

        $courses = Courses::select('name', 'id')
        ->get();

        $halls = Halls::select('name', 'id')
        ->get();
        //var_dump($courses);die;

        return view('pages.appointment',
                    array(
                        'courses' => $courses,
                        'halls' => $halls
                    )
        );
    }

    public function getAppointments() 
    {
        $appointments = Appointments::all();
        return response()->json(array('appointments'=> $appointments), 200);
    }

    public function postAppointments(Request $request)
    {
       // return $request;

        $selectedDate = $request->selectedDate;

        $addDate = DB::table('appointments')->insert([
            'app_date' => $selectedDate
        ]);
    }
}
