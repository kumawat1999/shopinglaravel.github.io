<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function ShowLoginForm(){
        return view('Auth.login');
    }

    public function LoginFormFunction(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',

        ]);

        $result=$request->only('email','password');
         if(Auth::attempt($result)){
            return redirect()->intended('Dashbord');
         }
         return redirect('login')->withSuccess('not login');
     }
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
