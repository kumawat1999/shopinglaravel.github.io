<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jewellery2;

class Jewellery2Controller extends Controller
{
    public function Jewellery2Add()
    {
        return view('backend.Jewellery2.form');
    }
    public function Jewellery2list()
    {
        $SendData=Jewellery2::all();
        return view('backend.Jewellery2.list',compact('SendData'));
    }
    public function Jewellery2Validation(Request $request)
    {
        $request->validate([
            'Title' => 'required',
            'Price' => 'required',
            'Photo' => 'required',
        ]);

        $reslut = new Jewellery2();

        if ($request->hasFile('Photo')) {
            $photos = $request->file('Photo');
            $PhotoName = rand(100000, 999999) . '.' . $photos->getClientOriginalExtension();
            $photos->move(public_path('images'), $PhotoName);
        }
        $reslut->Title = $request->get('Title');
        $reslut->Price = $request->get('Price');
        $reslut->Photo=$PhotoName;
        $reslut->save();
        return redirect()->route('Jewellery2/list');
    }
}
