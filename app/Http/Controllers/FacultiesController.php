<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faculties;


class FacultiesController extends Controller
{

    public function faculties()
    {

        $faculties=	Faculties::leftjoin('media','faculties.id', '=' , 'media.entity_id')
        ->where('media.type','=','faculties')
        ->select('*')
        ->get();


                return view('pages.faculties',array('faculties' => $faculties));

    }

}
