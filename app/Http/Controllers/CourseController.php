<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Routing\Controller as BaseController;
use App\User;
use App\Courses;

class CourseController extends Controller
{
    public function getAllTeachers(){

        $teachers = User::all()
            ->where('users.role','=','2')
            ->get();
        return view('pages.courses',array('teachers'=> $teachers));
    }
    public function course()
    {
        $courses = Courses::leftjoin('users','users.id','=','courses.user_id')
            ->where('users.role','=','2')
            ->get();
        return view('pages.courses',array('courses'=>$courses));

    }
}
?>
