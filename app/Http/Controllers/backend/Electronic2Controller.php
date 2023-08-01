<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Electronic2Model;

class Electronic2Controller extends Controller
{
    public function Electronic2Add()
    {
        return view('backend.Electronic2.form');
    }
    public function Electronic2list()
    {
        $SendData=Electronic2Model::all();
        return view('backend.Electronic2.list',compact('SendData'));
    }
    public function Electronic2Validation(Request $request)
    {
        $request->validate([
            'Title' => 'required',
            'Price' => 'required',
            'Photo' => 'required',
        ]);

        $reslut = new Electronic2Model();

        if ($request->hasFile('Photo')) {
            $photos = $request->file('Photo');
            $PhotoName = rand(100000, 999999) . '.' . $photos->getClientOriginalExtension();
            $photos->move(public_path('images'), $PhotoName);
        }
        $reslut->Title = $request->get('Title');
        $reslut->Price = $request->get('Price');
        $reslut->Photo=$PhotoName;
        $reslut->save();
        return redirect()->route('Electronic2/list');
    }
}
