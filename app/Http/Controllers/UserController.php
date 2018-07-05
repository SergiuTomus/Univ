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
    public function edit($id)
    {
        $user = User::find($id);

        return view('partials/users/edit', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->first_name=$request->input('first_name');
        $user->last_name =$request->input('last_name');
        $user->email=$request->input('email');


        $user->save();
        return back();
    }
}
