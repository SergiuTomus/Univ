<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faculties;
use Illuminate\Support\Facades\View;


class FacultiesController extends Controller
{

    public function index(){

        $faculties = Faculties::show();

        return view('main');
    }

}
