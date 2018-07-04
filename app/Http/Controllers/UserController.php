<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $user = Auth::user()->leftjoin('media','users.id','=','media.entity_id')
                ->where('media.type','=','teachers')
                ->select('*')
                ->first()
                ->toArray();

        return view('partials/users/profile',array('user'=>$user));
    }
    public function update(Request $request) {

        /**
         * fetching the user model
         */
        $user = Auth::user();


        /**
         * Validate request/input
         **/
        $this->validate($request, [
            'first_name' => 'required|max:255'.$user->id,
            'last_name' => 'required|max:255'.$user->id,
            'email' => 'required|email|max:255|unique:users,email,'.$user->id,
        ]);

        /**
         * storing the input fields name & email in variable $input
         * type array
         **/
        $input = $request->only('first_name','last_name','email');



        /**
         * Accessing the update method and passing in $input array of data
         **/
        $user->update($input);

        /**
         * after everything is done return them pack to /profile/ uri
         **/
        return back();
    }

}
