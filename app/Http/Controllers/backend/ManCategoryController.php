<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ManCategory;

class ManCategoryController extends Controller
{
    public function Man_Categroy_Add(){
        return view('backend.Categroy.ManCategory.Add');
    }
    public function Man_Categroy_List(){
        $CategroyList=ManCategory::all();
        return view('backend.Categroy.ManCategory.List',compact('CategroyList'));
    }

    public function relationShip($id){
        $data=ManCategory::with('getSubCategroy')->where('id',$id)->first();

        return view('backend.Categroy.ManCategory.Relation' ,compact('data'));
    }

    public function Man_Categroy_Function(Request $request){
        $request->validate([
            'Name'=>'required',
        ]);

        $result=new ManCategory();
        $result->Name=$request->get('Name');
        $result->save();
        return redirect()->route('Categroy/List');

    }

    public function Man_Edit_Show_Form($id){
        $datas=ManCategory::where('id',$id)->first();
        return view('backend.Categroy.ManCategory.Edit',compact('datas'));
    }
    public function Man_Categroy_Upadate(Request $request,$id){
        $request->validate([
            'Name'=>'required',
        ]);

        ManCategory::where('id',$id)->update([
            'Name'=>$request->get('Name'),
        ]);
        return redirect()->route('Categroy/List');

    }


    public function Man_Categroy_Delete($id){
        ManCategory::where('id',$id)->first()->delete();
        return redirect()->route('Categroy/List');
    }




    public function Status($id){          ////************* status Function
        $product=ManCategory::select('Status')->where('id',$id)->first();

        if($product->Status=='1'){
            $Status='0';

        }
        else{
            $Status='1';
        }
        $product=array('Status'=>$Status);
        ManCategory::where('id',$id)->update($product);
        return redirect()->route('Categroy/List');
   }

}

