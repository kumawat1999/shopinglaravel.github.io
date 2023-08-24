<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ManModel;

class ManController extends Controller
{
    public function ShowForm()
    {
        return view('backend.ManShirt.add');
    }
    public function ShowList()
    {
        $SendData=ManModel::all();
        return view('backend.ManShirt.list',compact('SendData'));
    }
    public function ShirtValidation(Request $request)
    {
        $request->validate([
            'Title' => 'required',
            'Price' => 'required',
            'Photo' => 'required',
        ]);

        $reslut = new ManModel();

        if ($request->hasFile('Photo')) {
            $photos = $request->file('Photo');
            $PhotoName = rand(100000, 999999) . '.' . $photos->getClientOriginalExtension();
            $photos->move(public_path('images'), $PhotoName);
        }
        $reslut->Title = $request->get('Title');
        $reslut->Price = $request->get('Price');
        $reslut->Photo=$PhotoName;
        $reslut->save();
        return redirect()->route('main/list');
    }
    public function Man_Edit($id){
        $data=ManModel::where('id',$id)->first();
        return view('backend.ManShirt.edit',compact('data'));
    }

    public function Man_Update(Request $request,$id){
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
        ManModel::where('id',$id)->update([
            'Title'=>$request->get('Title'),
            'Price'=>$request->get('Price'),
            'Photo'=>$PhotoName,
        ]);
        return redirect()->route('main/list');

    }
    public function Man_Delete($id){
        $data=ManModel::where('id',$id)->first();
        $data->delete();
        return redirect()->route('main/list');
    }
}



