<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Halls;

class HallsPageController extends Controller
{
    public function hall($name)
    {



    	$hall=	Halls::leftjoin('media','halls.id', '=' , 'media.entity_id')
    	->where('media.type','=','halls')
        ->select('halls.*','media.path')
    	->where('slug', '=', $name)
    	->first()->toArray();
    	
		return view('pages.hall', array('hall' => $hall));    

	}
}
