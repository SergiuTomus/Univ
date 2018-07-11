<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faculties;

class FacultyPageController extends Controller
{
    public function faculties()
    {

        $faculties=	Faculties::select('*')
            ->get();


        return view('main',array('faculties' => $faculties));

    }
	public function faculty($name)
    {

       $faculty=Faculties::leftjoin('media','faculties.id', '=' , 'media.entity_id')
    	->where('media.type','=','faculties')
        ->select('faculties.*','media.path')
    	->where('slug', '=', $name)
    	->first()->toArray();

		return view('pages.facultyPage', array('faculty' => $faculty));
}


}

?>
