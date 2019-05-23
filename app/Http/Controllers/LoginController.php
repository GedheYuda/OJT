<?php

namespace App\Http\Controllers;

use App\Login;
use Illuminate\Http\Request;

class AuthControlelr extends Controller
{
    public function loginForm(){
        return view('login.form');
    }
    public function login(Request $request){
        $request->validate([
            'email'     => 'required|string|unique:users',
            'password'  => 'required|string|min:8|confirmed',
        ]);
        $email = $request->get('email');
        $password = $request->get('password');
        if(strlen($email) == 0){
            if(strlen($password) == 0){
                return redirect('login')->with('message','Email or Password not be empty');
            }
        }else{
            if(Login::where('email',$email)){
                if(Login::where('password',$password)){
                    $user = Login::all();
                    Auth::login($user, true);
                    return redirect('index')->with('success','You have been login');
                }
            }
            else{
                return redirect('login')->with('message','Password and Email should be match');
            }
        }
    }
    public function login3(Request $request){
        $request->validate([
            'email'     => 'required|string|unique:users',
            'password'  => 'required|string|min:8|confirmed',
        ]);
        $email = $request->get('email');
        $password = $request->get('password');
        if(strlen($email) == 0){
            if(strlen($password) == 0){
                return redirect('login')->with('message','Email or Password not be empty');
            }
        }
        $cred = request([$email,$password]);
        $user = Login::where('email',$email)->orWhere('password',$password);
        Auth::login($user, true);
        return redirect('index')->with('success','You have been login');
    }
    public function loginv2(Request $request){
        $request->validate([
            'email'     => 'required|string|unique:users',
            'password'  => 'required|string|min:8|confirmed',
        ]);
        $email = $request->get('email');
        $password = $request->get('password');
        if(strlen($email) == 0){
            if(strlen($password) == 0){
                return redirect('login')->with('message','Email or Password not be empty');
            }
        }
        $cred = request([$email,$password]);
        if(!Auth::attempt($cred)){
            return redirect('login')->with('message','Password and Email should be match');
        }
        else{
            Auth::attempt($cred);
            return redirect('index')->with('success','You have been login');
        }
    }
    protected function attempt(){
        return Auth::logout();
    }
    public function logout(Request $request){
        return $this->attempt() ?: redirect('index')
        ->with('success','You have been logout');
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
