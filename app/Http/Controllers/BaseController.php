<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Faculties;


class BaseController extends Controller
{
    public $faculties;
    public function __construct()
    {
        $faculties = Faculties::all();


        View::share('faculties',$faculties);
    }

}
