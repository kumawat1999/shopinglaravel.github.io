<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ManCategory;
use App\Models\SubCategroyModel;

class SubCategoryController extends Controller
{
    public function Sub_Categroy_Add(){
        $CategroyList=ManCategory::get();
        return view('backend.Categroy.SubCategory.Add',compact('CategroyList'));
    }

    public function Sub_Categroy_List(){
      $ManCategoryss=ManCategory::select('man_categories.*','sub_categroy_models.Names','sub_categroy_models.substatus')
      ->join('sub_categroy_models','man_categories.id','=','sub_categroy_models.ForenKey')->get();

        return view('backend.Categroy.SubCategory.List' ,compact('ManCategoryss'));

        // $data=SubCategroyModel::with('getCategroy')->get();
        // return view('backend.Categroy.SubCategory.List' ,compact('data'));
        // echo "<pre>"; print_r($data);
    }

    public function SubCategroyFunction(Request $request){
        $request->validate([
            'Names'=>'required',
        ]);

        $InsertDeta=new SubCategroyModel();
        $InsertDeta->Names=$request->get('Names');
        $InsertDeta->ForenKey=$request->get('ForenKey');
        $InsertDeta->save();
        return redirect()->route('Sub/Categroy/List');
    }

    public function Sub_Categroy_Edit($id){
        $datas=SubCategroyModel::where('id',$id)->first();
        $datasss=ManCategory::where('id',$id)->first();
        return view('backend.Categroy.SubCategory.Edit',compact('datas','datasss'));
    }


    public function Sub_Categroy_Delete($id){
        SubCategroyModel::where('id',$id)->delete();
        return redirect()->route('Sub/Categroy/List');
    }


    public function SubStatus($id){          ////************* status Function
        $product=SubCategroyModel::select('substatus')->where('ForenKey',$id)->first();

        if($product->substatus=='1'){
            $substatus='0';

        }
        else{
            $substatus='1';
        }
        $product=array('substatus'=>$substatus);
        SubCategroyModel::where('ForenKey',$id)->update($product);
        return redirect()->route('Sub/Categroy/List');
   }




}



