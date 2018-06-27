<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Routing\Controller as BaseController;

class CourseController extends Controller
{
  

    public function course(){
        return view('pages.course');
    }

}
?>