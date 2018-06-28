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
    
        $halls=	Halls::leftjoin('media','media.entity_id', '=' , 'halls.id')
        ->select('halls.*')
        ->get();
    var_dump($halls);

                return view('pages.halls',array('halls' => $halls));

    }


}
?>
