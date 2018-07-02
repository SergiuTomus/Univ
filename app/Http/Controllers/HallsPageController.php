<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Halls;

class HallsPageController extends Controller
{
    public function hall($name)
    {



    	$hall=	Halls::leftjoin('media','halls.id', '=' , 'media.entity_id')
        ->select('halls.*','media.path')
    	->where('slug', '=', $name)
    	->first()->toArray();
    	
		return view('pages.hall', array('hall' => $hall));    

	}
}
