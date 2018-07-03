<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;       
use Illuminate\Routing\Controller as BaseController;
use DB;

class TeachersController extends Controller {
    public function teachers(){
        $teachers = DB::table('users')
        ->leftjoin('media','users.id', '=' , 'media.entity_id')
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