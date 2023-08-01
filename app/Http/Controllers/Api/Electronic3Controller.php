<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Electronic3Model;

class Electronic3Controller extends Controller
{
    public function Electronic3_list()
    {
        try {
            $data = Electronic3Model::all();
            return response()->json([
                'status' => true,
                'message' => 'successfully show list',
                'data' => $data,
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
                'data' => [],
            ]);
        }
    }

    public function Electronic3_add(Request $request)
    {
        $reslut = new Electronic3Model();
        if ($request->hasFile('Photo')) {
            $photos = $request->file('Photo');
            $PhotoName = rand(100000, 999999) . '.' . $photos->getClientOriginalExtension();
            $photos->move(public_path('images'), $PhotoName);
        }
        $reslut->Title = $request->get('Title');
        $reslut->Price = $request->get('Price');
        $reslut->Photo = $PhotoName;
        $reslut->save();
        try {
            return response()->json([
                'status' => true,
                'message' => 'successfully add data',
                'data' => $reslut,
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
                'data' => [],
            ]);
        }
    }
}



