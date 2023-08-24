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
    public function Child_Fatch_data($id){
        try {
        $data=ChildModel::where('id',$id)->first();
        return response()->json([
            'status'=>true,
            'message'=>'successfully Fatch Data',
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
    public function Update_Api_Data(Request $request,$id){
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
           $data= ChildModel::where('id',$id)->update([
                'Title'=>$request->get('Title'),
                'Price'=>$request->get('Price'),
                'Photo'=>$PhotoName,
            ]);
            return response()->json([
                'status'=>true,
                'message'=>'Your Data Successfully Updatet Data',
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
    public function Child_Delete($id){
        try {
            $data=ChildModel::where('id',$id)->first()->delete();

            return response()->json([
                'status'=>true,
                'message'=>'Successfully Deleted Row',
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


