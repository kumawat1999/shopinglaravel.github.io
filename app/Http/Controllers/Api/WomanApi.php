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




    public function Woman_Api_Function(Request $request){
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
}



