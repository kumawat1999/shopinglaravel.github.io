<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class Auths extends Controller
{
    public function RegisterFormFunction(Request $request){

        $input = $request->all();
       $input['password'] = Hash::make($input['password']);
       $user = User::create($input);
       $success['token'] =  $user->createToken('MyApp')->plainTextToken;
       $success['name'] =  $user->name;

       return response()->json([
        'status'=>true,
        'message'=>'Register Successfully',
        'data'=>$success,
    ]);
   }
   public function loginUser(Request $request)
   {
    try {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')->plainTextToken;
            $success['name'] =  $user->name;

         return response()->json([
             'status'=>true,
             'message'=>'Register Successfully',
             'data'=>$success,
         ]);
        }
    } catch (\Throwable $th) {

            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
                'data'=>[],
            ]);
    }
 }


   public function logoutsss(Request $request)
   {
    try{
       $request->user()->currentAccessToken()->delete();
          return response()->json([
            'status'=>true,
            'message'=>'Logged out successfully'
          ]);
    }catch(\Exception $i){
        return response()->json([
            'status'=>false,
            'message'=>$i->getMessage()
        ]);
    }
   }
   public function profile(Request $request){
    return $request->user();

   }

}


