<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ElectronicModel;

class ElectronicController extends Controller
{
    public function Electronic_List(){
        try {
            $result=ElectronicModel::all();
            return response()->json([
                'status'=>true,
                'message'=>'successfull Show List',
                'data'=>$result,
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
                'data'=>[],
            ]);
        }
    }
    public function Electronic_add(Request $request){
        $reslut = new ElectronicModel();

        if ($request->hasFile('Photo')) {
            $photos = $request->file('Photo');
            $PhotoName = rand(100000, 999999) . '.' . $photos->getClientOriginalExtension();
            $photos->move(public_path('images'), $PhotoName);
        }
        $reslut->Title = $request->get('Title');
        $reslut->Price = $request->get('Price');
        $reslut->Photo=$PhotoName;
        $reslut->save();
        try {
            return response()->json([
                'status'=>true,
                'message'=>'successfull Add data',
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
