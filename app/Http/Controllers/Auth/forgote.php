<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class forgote extends Controller
{
    public function forgotepassword(){
        return view('Auth.forgote');
    }
    public function Confurn_pass(){
        return view('Auth.confirm');
    }


    public function Chack_Email(Request $request){
        $request->validate([
            'email'=>'required|email',
        ]);
        $result =User::where('email',$request->email)->first();
        if($result){

            $RandPasswordd = rand(100000, 999999);
            $result->otp=$RandPasswordd;
            $result->save();

            // \Mail::send('Auth/sendMail',compact('RandPasswordd'), function ($message) use($request) {
            //     $message->to($request->get('email'))->subject('Subject of the message!');
            // });

            return redirect()->route('Confurn/pass');
        }
        return redirect()->back();
    }


    public function Update_Password(Request $request){
        $request->validate([
            'password'=>'required|min:8',
            'confpass'=>'required',
            'otp'=>'required',
        ]);
        $result =User::where('otp',$request->otp)->first();
        if(!$result){
            return redirect()->back();
        }
        $result->password= Hash::make($request->password);
        $result->save();
        return redirect()->route('login');

    }


}

