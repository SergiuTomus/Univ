<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HallsPageController extends Controller
{
    public function halls_page(){
        return view('pages.halls_page');
    }
}
