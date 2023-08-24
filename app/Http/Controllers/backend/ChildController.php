<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChildModel;

class ChildController extends Controller
{
    public function ShowChildForm()
    {
        return view('backend.Child.form');
    }
    public function ShowChildList()
    {
        $SendData = ChildModel::all();
        return view('backend.Child.list', compact('SendData'));
    }
    public function ChildValidation(Request $request)
    {
        $request->validate([
            'Title' => 'required',
            'Price' => 'required',
            'Photo' => 'required',
        ]);

        $reslut = new ChildModel();

        if ($request->hasFile('Photo')) {
            $photos = $request->file('Photo');
            $PhotoName = rand(100000, 999999) . '.' . $photos->getClientOriginalExtension();
            $photos->move(public_path('images'), $PhotoName);
        }
        $reslut->Title = $request->get('Title');
        $reslut->Price = $request->get('Price');
        $reslut->Photo = $PhotoName;
        $reslut->save();
        return redirect()->route('child/list');
    }

    public function Child_Edit($id){
        $data=ChildModel::where('id',$id)->first();
        return view('backend.Child.edit',compact('data'));
    }
    public function ChildEditFuunction(Request $request,$id){
        $request->validate([
            'Title' => 'required',
            'Price' => 'required',
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
        ChildModel::where('id',$id)->update([
            'Title'=>$request->get('Title'),
            'Price'=>$request->get('Price'),
            'Photo'=>$PhotoName,
        ]);

        return redirect()->route('child/list');
    }

    public function Child_Delete($id){
        $deletes=ChildModel::where('id',$id)->first();
        $deletes->delete();
        return redirect()->route('child/list');
    }
}




