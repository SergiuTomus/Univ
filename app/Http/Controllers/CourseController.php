<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\User;
use App\Courses;


class CourseController extends Controller
{
    public function getAllCourses(){
        $teachers = User::select('*')
            ->where('users.role','=','2')
            ->get();

        $courses = Courses::select('*')
            ->get();

        return view('pages.courses',
            array(
                'teachers'=> $teachers,
                'courses' => $courses
            )
        );
    }
    public function getAllTeachers($id){

        $teachers = User::select('*')
            ->where('users.role','=','2')
            ->get();

        $courses = Courses::leftjoin('users','users.id','=','courses.user_id')
            ->where('courses.user_id','=',$id)
            ->get();

        return view('pages.courses',
            array(
                'teachers'=> $teachers,
                'courses' => $courses
            )
        );
    }

}
?>
