<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jewellery3;

class Jewellery3Controller extends Controller
{
    public function Jewellery3_List(){
        try {
            $result=Jewellery3::all();
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
    public function Jewellery3_add(Request $request){
        $reslut = new Jewellery3();

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
