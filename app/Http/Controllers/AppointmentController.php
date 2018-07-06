<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointments; 
use App\Courses;
use App\Halls;
use DB;
use Illuminate\Support\Facades\Auth;

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

       /* $appointments = Appointments::leftjoin('users','users.id','=','appointments.user_id')
            ->select('users.*')
            ->get();*/

        return response()->json(array('appointments'=> $appointments), 200);
    }

    public function postAppointments(Request $request)
    {
        // return $request;
        $id = Auth::user()->id;
        $selectedDate = $request->selectedDate;
        $cours_id = $request->cours_id;
        $hall_id = $request->hall_id;
<<<<<<< HEAD
        $picker_hour = $request->picker_hour;

        $time = strtotime($selectedDate);

        //var_dump($time);die;
        $addDate = DB::table('appointments')->insert([
            'app_date' => $time,
=======
        $timepicker = $request->timepicker;
        $dateTime= $selectedDate.' '.$timepicker;
        //var_dump($dateTime); die;
        $addDate = DB::table('appointments')->insert([
            'app_date' => $dateTime,
>>>>>>> cef9f6036b3465c1967fe7c63967268b001d4331
            'user_id' => $id,
            'cours_id' => $cours_id,
            'hall_id' => $hall_id
        ]);
    }
}
