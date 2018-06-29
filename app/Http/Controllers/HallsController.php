<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Halls;
use App\Media;

class HallsController extends Controller
{
  

   /* public function halls(){
        return view('pages.halls');
    }*/

    public function halls()
    {
    
        $halls=	Halls::leftjoin('media','halls.id', '=' , 'media.entity_id')
        ->select('halls.*','media.path')
        ->get();
    

                return view('pages.halls',array('halls' => $halls));

    }


}
?>
