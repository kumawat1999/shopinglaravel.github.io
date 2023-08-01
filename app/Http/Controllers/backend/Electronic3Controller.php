<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Electronic3Model;

class Electronic3Controller extends Controller
{
    public function Electronic3Add()
    {
        return view('backend.Electronic3.form');
    }
    public function Electronic3list()
    {
        $SendData=Electronic3Model::all();
        return view('backend.Electronic3.list',compact('SendData'));
    }
    public function Electronic3Validation(Request $request)
    {
        $request->validate([
            'Title' => 'required',
            'Price' => 'required',
            'Photo' => 'required',
        ]);

        $reslut = new Electronic3Model();

        if ($request->hasFile('Photo')) {
            $photos = $request->file('Photo');
            $PhotoName = rand(100000, 999999) . '.' . $photos->getClientOriginalExtension();
            $photos->move(public_path('images'), $PhotoName);
        }
        $reslut->Title = $request->get('Title');
        $reslut->Price = $request->get('Price');
        $reslut->Photo=$PhotoName;
        $reslut->save();
        return redirect()->route('Electronic3/list');
    }
}
