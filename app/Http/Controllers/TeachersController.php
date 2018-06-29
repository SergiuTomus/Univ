<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;       
use Illuminate\Routing\Controller as BaseController;
use DB;

class TeachersController extends Controller {
    public function teachers(){
        $users = DB::table('users')->where('role', '=', 2)->get();

        return view('pages.teachers', [
            'users' => $users
            ]
        );
    }
}