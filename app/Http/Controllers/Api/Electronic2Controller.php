<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Electronic2Model;

class Electronic2Controller extends Controller
{
    public function Electronic2_list()
    {
        try {
            $data = Electronic2Model::all();
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

    public function Electronic2_add(Request $request)
    {
        $reslut = new Electronic2Model();
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
