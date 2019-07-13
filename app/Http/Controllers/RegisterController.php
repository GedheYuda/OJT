<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function registerForm()
    {
        return view('balipasadena.register');
    }
    public function register(Request $request){
        $pass = $request->get('password');
        $pass2 = $request->get('password2');
        $em = $request->get('email');
        $email = User::where('email', $em)->count();
        if($pass != $pass2){
            return redirect('/dashboard/register')->with('message','Password dan Ulangi Password harus sama');
        }
        else{
            if($email > 0)
            {
                return redirect('/dashboard/register')->with('message','Email sudah ada di database. Mohon pilih yang lain');
            }
            else{
                $user = new User([
                    'name'              =>$request->get('name'),
                    'age'               =>$request->get('age'),
                    'address'           =>$request->get('address'),
                    'email'             =>$request->get('email'),
                    'password'          =>bcrypt($request->get('password')),
                ]);
                $user->save();
                return redirect('/login')->with('success','Login untuk masuk ke dashboard');
            }
        }
    }
}
