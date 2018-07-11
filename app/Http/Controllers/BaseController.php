<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View
use App\Faculties;


class BaseController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        View::share('faculties','facuktate');
    }
    public function basic(){
        return view('main');
    }
}
