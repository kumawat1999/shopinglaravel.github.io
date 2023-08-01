<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WomanModel;

class WomanController extends Controller
{
    public function ShowWomanForm()
    {
        return view('backend.Woman.form');
    }
    public function ShowWomanList()
    {
        $SendData=WomanModel::all();
        return view('backend.Woman.list',compact('SendData'));
    }
    public function WomanValidation(Request $request)
    {
        $request->validate([
            'Title' => 'required',
            'Price' => 'required',
            'Photo' => 'required',
        ]);

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
        return redirect()->route('woman/list');
    }
}
