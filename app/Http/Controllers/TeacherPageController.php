<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TeacherPageController extends Controller
{
    public function teacher($name)
    {



        $teacher = DB::table('users')
        ->leftjoin('media','users.id', '=' , 'media.entity_id')
        ->where('media.type','=','teachers')
        ->leftjoin('courses','users.id', '=' , 'courses.user_id')
        ->select('users.*','media.path','courses.name')
    	->where('slug', '=', $name)
    	->first();
       
    	
		return view('pages.teacher', array('teacher' => $teacher));    

	}  
}
