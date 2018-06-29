<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Routing\Controller as BaseController;

class TeachersController extends Controller
{
    public function teachers(){
        return view('pages.teachers');
    }
}
