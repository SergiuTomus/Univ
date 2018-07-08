<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointments;
use App\Courses;
use App\Halls;
use DB;
use App\User;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getUserRole(){
        $userRole = Auth::user()->role;
        return response()->json(array('userRole' => $userRole), 200);

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

        $appointments = Appointments::join('users','users.id','=','appointments.user_id')
            ->select('*')
            ->get();

        return response()->json(array('appointments'=> $appointments), 200);
    }

    public function postAppointments(Request $request)
    {
        // return $request;
        $id = Auth::user()->id;
        $selectedDate = $request->selectedDate;
        $course_id = $request->course_id;
        $hall_id = $request->hall_id;
        $timepicker = $request->timepicker;
        $dateTime= $selectedDate.' '.$timepicker;
        //var_dump($dateTime); die;
        $addDate = DB::table('appointments')->insert([
            'app_date' => $dateTime,
            'user_id' => $id,
            'course_id' => $course_id,
            'hall_id' => $hall_id
        ]);
    }
}
