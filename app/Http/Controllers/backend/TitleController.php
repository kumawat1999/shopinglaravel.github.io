<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TitleModel;

class TitleController extends Controller
{
    public function TitleFormShow()
    {
        return view('backend.Title.form');
    }
    public function ShowTitleList()
    {
        $SendData=TitleModel::all();
        return view('backend.Title.list',compact('SendData'));
    }
    public function TitleValidation(Request $request)
    {
        $request->validate([
            'Title' => 'required',
        ]);

        $reslut = new TitleModel();
        $reslut->Title = $request->get('Title');
        $reslut->save();
        return redirect()->route('Title/List');
    }
}
