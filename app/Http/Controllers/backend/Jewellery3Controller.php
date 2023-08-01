<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jewellery3;

class Jewellery3Controller extends Controller
{
    public function Jewellery3Add()
    {
        return view('backend.Jewellery3.form');
    }
    public function Jewellery3list()
    {
        $SendData=Jewellery3::all();
        return view('backend.Jewellery3.list',compact('SendData'));
    }
    public function Jewellery3Validation(Request $request)
    {
        $request->validate([
            'Title' => 'required',
            'Price' => 'required',
            'Photo' => 'required',
        ]);

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
        return redirect()->route('Jewellery3/list');
    }
}
