<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function teachers(){
        return view('pages.teachers');
    }
}
