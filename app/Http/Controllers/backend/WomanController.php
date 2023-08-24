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

    public function Woman_Edit($id){
        $data=WomanModel::where('id',$id)->first();
        return view('backend.Woman.edit',compact('data'));
    }

    public function Woman_Update(Request $request,$id){
        $request->validate([
            'Title' => 'required',
            'Price' => 'required',
            'Photo' => 'required',
        ]);
        $photos='';
        if($photos==''){
            $photos=$request->get('Photo_hidden');
        }

        if ($request->hasFile('Photo')) {
            $photos = $request->file('Photo');
            $PhotoName = rand(100000, 999999) . '.' . $photos->getClientOriginalExtension();
            $photos->move(public_path('images'), $PhotoName);
        }
        WomanModel::where('id',$id)->update([
            'Title'=>$request->get('Title'),
            'Price'=> $request->get('Price'),
            'Photo'=>$PhotoName,
        ]);
        return redirect()->route('woman/list');
    }
    public function Woman_Delete($id){
        $data=WomanModel::where('id',$id)->first();
        $data->delete();
        return redirect()->route('woman/list');
    }
}
