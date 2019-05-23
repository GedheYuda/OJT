<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;

class RegisterController extends Controller
{
    public function reigsterForm()
    {
        return view('register.form');
    }
    public function register(Request $request){
        $request->validate([
            'name'      => 'required|string',
            'email'     => 'required|string|unique:users|max:255',
            'password'  => 'required|string|min:8|unique',
            'age'       => 'required|integer|max:3',
            'jobs'      => 'required|string',
            'address'   => 'required|string',
            'gender'    => 'required|string',
        ]);
        $user = new User([
            'name'              =>$request->get('name'),
            'age'               =>$request->get('age'),
            'jobs'              =>$request->get('jobs'),
            'address'           =>$request->get('address'),
            'email'             =>$request->get('email'),
            'password'          =>bcrypt($request->get('password')),
            'gender'            =>$request->get('jobs'),
        ]);
        $user->save();
        return redirect('user/index')->with('success','User has been added in database');
    }
    public function __construct()
    {
        $this->middleware('guest');
    }
}
