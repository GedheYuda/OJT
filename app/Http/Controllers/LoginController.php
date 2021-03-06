<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function loginForm(){
        return view('balipasadena.login');
    }
    public function login(Request $request){
        $email = $request->get('email');
        $password = $request->get('password');
        $data = User::where('email', $email)->first();
        if ($data){
            if(Hash::check($password, $data->password)){
                Session::put('name', $data->name);
                return redirect('/dashboard')->with('success','Anda telah berhasil login');
            }
            else{
                return redirect('/login')->with('message','Password anda salah mohon ulagni ');
            }
        }
        else{
            return redirect('/login')->with('message','Email dan Password harus terdaftar di database');
        }
    }
    protected function attempt(){
        Session::flush();
    }
    public function logout(Request $request){
        return $this->attempt() ?: redirect('/');
    }
}
