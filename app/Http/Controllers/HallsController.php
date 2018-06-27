<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Routing\Controller as BaseController;

class HallsController extends Controller
{
  

    public function halls(){
        return view('pages.halls');
    }

}
?>
