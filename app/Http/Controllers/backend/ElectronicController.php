<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ElectronicModel;

class ElectronicController extends Controller
{
    public function ElectronicAdd()
    {
        return view('backend.Electronic.form');
    }
    public function Electroniclist()
    {
        $SendData=ElectronicModel::all();
        return view('backend.Electronic.list',compact('SendData'));
    }
    public function ElectronicValidation(Request $request)
    {
        $request->validate([
            'Title' => 'required',
            'Price' => 'required',
            'Photo' => 'required',
        ]);

        $reslut = new ElectronicModel();

        if ($request->hasFile('Photo')) {
            $photos = $request->file('Photo');
            $PhotoName = rand(100000, 999999) . '.' . $photos->getClientOriginalExtension();
            $photos->move(public_path('images'), $PhotoName);
        }
        $reslut->Title = $request->get('Title');
        $reslut->Price = $request->get('Price');
        $reslut->Photo=$PhotoName;
        $reslut->save();
        return redirect()->route('Electronic/list');
    }
}
