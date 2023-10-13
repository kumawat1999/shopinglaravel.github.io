<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jewellery1;
use App\Models\Jewellery2;
use App\Models\Jewellery3;
use App\Models\ElectronicModel;
use App\Models\Electronic2Model;
use App\Models\Electronic3Model;

class HomeController extends Controller
{
    public function HomePage(){
        return view('front.index');
    }
    public function Jewellery(){
        $jewellry1=Jewellery1::get();
        $jewellry2=Jewellery2::get();
        $jewellry3=Jewellery3::get();
        return view('front.jewellery',compact('jewellry1','jewellry2','jewellry3'));
    }
    public function fashion(){
        $ElectronicModel=ElectronicModel::get();
        $Electronic2Model=Electronic2Model::get();
        $Electronic3Model=Electronic3Model::get();
        return view('front.fashion',compact('ElectronicModel','Electronic2Model','Electronic3Model'));
    }
    public function electronic(){
        return view('front.electronic');
    }
}
