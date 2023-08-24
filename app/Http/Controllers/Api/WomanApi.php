<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use App\Models\WomanModel;

class WomanApi extends Controller
{


public function Woman_List(){
    try {
        $reslut =WomanModel::all();

        return response()->json([
            'status'=>true,
            'message'=>'successfull Show List',
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


    public function Woman_Data_Add(Request $request){
        try {

            $reslut = new WomanModel();
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
                'message'=>'successfully add data',
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


    public function Woman_Fatch($id){
        try {

            $data=WomanModel::where('id',$id)->first();
            return response()->json([
                'status'=>true,
                'message'=>'SuccesFully Fatch Data',
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


    public function Woman_Update(Request $request,$id){
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
           $data= WomanModel::where('id',$id)->update([
                'Title'=>$request->get('Title'),
                'Price'=> $request->get('Price'),
                'Photo'=>$PhotoName,
            ]);
            return response()->json([
                'status'=>true,
                'message'=>'Succefully Updated Data',
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
    public function Woman_Delete($id){
        try {
        $data=WomanModel::where('id',$id)->first()->delete();
        return response()->json([
            'status'=>true,
            'message'=>'Successfully Deleted Data',
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
}



