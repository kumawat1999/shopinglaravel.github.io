<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function index(){
        return view('backend.index');
    }
    public function tables(){
        return view('backend.tables');
    }
}



