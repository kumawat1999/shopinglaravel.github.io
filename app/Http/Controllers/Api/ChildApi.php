<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChildModel;

class ChildApi extends Controller
{
    public function Child_function(){
        try {
            $data=ChildModel::all();
            return response()->json([
                'status'=>true,
                'message'=>'successfully show list',
                'data'=>$data,
            ]);

        } catch (\Throwable $th) {
            return response()->json([
                'status'=>true,
                'message'=>$th->getMessage(),
                'data'=>[],
            ]);
        }
    }

    public function Chlid_add(Request $request){
        try {
            $reslut=new ChildModel();
            if ($request->hasFile('Photo')) {
                $photos = $request->file('Photo');
                $PhotoName = rand(100000, 999999) . '.' . $photos->getClientOriginalExtension();
                $photos->move(public_path('images'), $PhotoName);
            }
            $reslut->Title = $request->get('Title');
            $reslut->Price = $request->get('Price');
            $reslut->Photo=$PhotoName;
            $reslut->save();
            return response()->json([
                'status'=>true,
                'message'=>'successfully add',
                'data'=>$reslut,
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
                'data'=>[],
            ]);
        }
    }
}



