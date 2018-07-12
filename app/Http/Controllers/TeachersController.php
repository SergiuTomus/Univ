<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\User;
use App\Courses;
use App\Media;
use App\Faculties;

class TeachersController extends Controller {


    public function teachers(){
        $teachers= User::leftjoin('media','users.id', '=' , 'media.entity_id')
        ->where('media.type','=','teachers')
        ->where('role', '=', 2)
        ->get();



        return view('pages.teachers', [
            'teachers' => $teachers
            ]
        );
    }
}
