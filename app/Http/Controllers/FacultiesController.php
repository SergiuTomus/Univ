<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faculties;
use Illuminate\View\View;


class FacultiesController extends BaseController
{
    public $faculties;

    public function __construct()
    {

        $faculties = Faculties::select('*')
            ->get();
    }

}
