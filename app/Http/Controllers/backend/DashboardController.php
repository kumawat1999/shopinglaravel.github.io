<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User ;
use App\Models\ChildModel;
use App\Models\ManModel;
use App\Models\WomanModel;
use App\Models\Electronic2Model;
use App\Models\Electronic3Model;
use App\Models\ElectronicModel;
use App\Models\Jewellery1;
use App\Models\Jewellery2;
use App\Models\Jewellery3;
use App\Models\ManCategory;
use App\Models\SubCategroyModel;
use App\Models\TitleModel;
class DashboardController extends Controller
{
    public function dashboard(){

        $page = 'dashboard';

        $Usercountdata       = User::count();
        $ChildModelcountdata       = ChildModel::count();
        $ManModelcountdata       = ManModel::count();
        $WomanModelcountdata       = WomanModel::count();
        $Electronic2Modelcountdata     = Electronic2Model::count();
        $Electronic3ModelCountdata     = Electronic3Model::count();
        $ElectronicModelCountdata     = ElectronicModel::count();
        $Jewellery1Countdata     = Jewellery1::count();
        $Jewellery2Countdata     = Jewellery2::count();
        $Jewellery3Countdata     = Jewellery3::count();
        $ManCategoryCountdata     = ManCategory::count();
        $SubCategroyModelCountdata     = SubCategroyModel::count();
        $TitleModelCountdata     = TitleModel::count();

        // return view('backend.tables',compact('Usercountdata','ChildModelcountdata','ManModelcountdata','WomanModelcountdata','Electronic2Modelcountdata','Electronic3ModelCountdata','ElectronicModelCountdata','Jewellery1Countdata','Jewellery2Countdata','Jewellery3Countdata','ManCategoryCountdata','SubCategroyModelCountdata','TitleModelCountdata'));
       return view('backend.tables',compact('Usercountdata','ChildModelcountdata','ManModelcountdata','WomanModelcountdata','Electronic2Modelcountdata','Electronic3ModelCountdata','ElectronicModelCountdata','Jewellery1Countdata','Jewellery2Countdata','Jewellery3Countdata','ManCategoryCountdata','SubCategroyModelCountdata','TitleModelCountdata'));
    }

}
