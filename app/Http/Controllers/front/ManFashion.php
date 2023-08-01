<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TitleModel;
use App\Models\ManModel;
use App\Models\WomanModel;
use App\Models\ChildModel;
use App\Models\ElectronicModel;
use App\Models\Electronic2Model;
use App\Models\Electronic3Model;

class ManFashion extends Controller
{
    public function Shirat_Scart(){
        $Titles=TitleModel::all();
        $senddatas=ManModel::all();
        $womanf=WomanModel::all();
        $Childf=ChildModel::all();
        $Electroni=ElectronicModel::all();
        $Electroni2=Electronic2Model::all();
        $Electroni3=Electronic3Model::all();
        return view('front.index',compact('Titles','senddatas','womanf','Childf','Electroni','Electroni2','Electroni3'));
}
}
