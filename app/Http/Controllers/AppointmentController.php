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

    public function getUserid(){
        $userid = Auth::user()->id;
        return response()->json(array('userid' => $userid), 200);

    }



    public function appointment(){

        $courses = Courses::select('name', 'id')
        ->get();

        $halls = Halls::select('name', 'id')
        ->get();
        

        return view('pages.appointment',
                    array(
                        'courses' => $courses,
                        'halls' => $halls
                    )
        );
    }



    public function getAppointments()
    {

        $appointments = DB::table('appointments')
        ->join('users', 'appointments.user_id', '=', 'users.id')
        ->join('courses', 'appointments.course_id', '=', 'courses.id')
        ->join('halls', 'appointments.hall_id', '=', 'halls.id')
        ->select('appointments.id', 'appointments.app_date', 'appointments.end_date', 'appointments.user_id', 'users.first_name', 'users.last_name', 'courses.name as courseName', 'halls.name as hallName')
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
        $timepicker2 = $request->timepicker2;
        $start_time= $selectedDate.' '.$timepicker;
        $end_time= $selectedDate.' '.$timepicker2;
        


        $appRestrict = DB::table('appointments')
        ->where('hall_id', '=', $hall_id)
        ->where('app_date', '>=', $start_time)
        ->where('app_date', '<', $end_time)
        ->orWhere('end_date', '>', $start_time)
        ->where('end_date', '<', $end_time)
        ->get()
        ->toArray();
        
        //var_dump(count($appRestrict));die;

        if(count($appRestrict) > 0){
            return response()->json(array('error' => true), 200);   
        }

        $addDate = DB::table('appointments')->insert([
            'app_date' => $start_time,
            'end_date' => $end_time,
            'user_id' => $id,
            'course_id' => $course_id,
            'hall_id' => $hall_id
        ]);
        $hall = Halls::find($hall_id);
        return response()->json(array('success' => true,
            'time' => $timepicker,
            'date' => $selectedDate,
            'hallname' => $hall['name']
        ), 200);
    }


    public function dropAppointments(Request $request)
     {
        $app_id=$request->app_id;

        $user_role = Auth::user()->role;

        if ($user_role < 3) {
            DB::table('appointments')->where('id', '=', $app_id)->delete();
        }



        return response()->json(array('success' => true,), 200);       

    }

}


