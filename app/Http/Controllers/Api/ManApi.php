<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ManModel;

class ManApi extends Controller
{

    public function Main_Api_Function()
    {

        $reslut =ManModel::all();
        try {
            return response()->json([
                'status' => true,
                'message' => 'Successfully add data',
                'data' => $reslut
            ]);
        } catch (\Throwable $rg) {
            return response()->json([
                'status' => false,
                'message' => $rg->getMessage(),
                'data' => [],
            ]);
        }
    }


    public function Man_Add(Request $request){

        $reslut = new ManModel();

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
                'message'=>'successfully add data',
                'data'=>$reslut,
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status'=>true,
                'message'=>$th->getMessage(),
                'data'=>[],
            ]);

        }
    }

    public function Fatch_Data($id){
        try {
            $data=ManModel::where('id',$id)->first();
            return response()->json([
                'status'=>true,
                'message'=>'Successfully Fatch Data',
                'data'=>$data,
            ]);

        } catch (\Throwable $th) {
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
                'data'=>[],
            ]);
        }

    }

    public function Update_Data(Request $request,$id){
        try {
            $photos='';
            if($photos==''){
                $photos=$request->get('Photo_hidden');
            }

            if ($request->hasFile('Photo')) {
                $photos = $request->file('Photo');
                $PhotoName = rand(100000, 999999) . '.' . $photos->getClientOriginalExtension();
                $photos->move(public_path('images'), $PhotoName);
            }
           $data= ManModel::where('id',$id)->update([
                'Title'=>$request->get('Title'),
                'Price'=>$request->get('Price'),
                'Photo'=>$PhotoName,
            ]);

            return response()->json([
                'status'=>true,
                'message'=>'Successfully Updated Data',
                'data'=>$data,
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
                'data'=>[],
            ]);

        }
    }
    public function Delete_Data($id){
        try {
            $data=ManModel::where('id',$id)->first()->delete();
            return response()->json([
                'status'=>true,
                'message'=>'SuccessFully Deleted Data',
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
}
