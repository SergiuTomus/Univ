<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;       
use Illuminate\Routing\Controller as BaseController;
use App\User;
use App\Courses;
use App\Media;

class TeachersController extends Controller {
    public function teachers(){
        $teachers= User::leftjoin('media','users.id', '=' , 'media.entity_id')
        ->where('media.type','=','teachers')
        ->leftjoin('courses','users.id', '=' , 'courses.user_id')
        ->select('users.*','media.path','courses.name')
        ->where('role', '=', 2)
        ->get();
            
       

        return view('pages.teachers', [
            'teachers' => $teachers
            ]
        );
    }
}