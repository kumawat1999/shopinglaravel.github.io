<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\Admin;
use App\Http\Controllers\backend\DashboardController;
/*

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => ''], function () {

    Route::get('register', 'App\Http\Controllers\Auth\RegisterController@ShowRegisterForm')->name('register');
    Route::post('register', 'App\Http\Controllers\Auth\RegisterController@RegisterFormFunction');
    Route::get('login', 'App\Http\Controllers\Auth\LoginController@ShowLoginForm')->name('login');
    Route::post('login', 'App\Http\Controllers\Auth\LoginController@LoginFormFunction')->name('login');
    Route::get('logout', 'App\Http\Controllers\Auth\LoginController@youlogout')->name('logout');



    Route::get('forgot/password', 'App\Http\Controllers\Auth\forgote@forgotepassword')->name('forgot/pass');
    Route::post('forgot/password', 'App\Http\Controllers\Auth\forgote@Chack_Email')->name('forgot/pass');
    Route::get('Confurn/password', 'App\Http\Controllers\Auth\forgote@Confurn_pass')->name('Confurn/pass');
    Route::post('Confurn/password', 'App\Http\Controllers\Auth\forgote@Update_Password')->name('Confurn/password');

    Route::group(['middleware' => 'loginss'], function () {
        // Route::get('Dashbord_1', [Admin::class, 'index'])->name('dashboard/page1');

        Route::get('Dashbord', [DashboardController::class, 'dashboard'])->name('dashboard/page'); // all tables img par link

        // main route start
        Route::get('main/relation', 'App\Http\Controllers\backend\ManController@relationShip')->name('main/relationShip');
        Route::get('main/list', 'App\Http\Controllers\backend\ManController@ShowList')->name('main/list');
        Route::get('main/form', 'App\Http\Controllers\backend\ManController@ShowForm')->name('main/form');
        Route::post('main/form', 'App\Http\Controllers\backend\ManController@ShirtValidation');
        Route::get('main/edit/{id}', 'App\Http\Controllers\backend\ManController@Man_Edit')->name('main/edit');
        Route::put('main/edit/{id}', 'App\Http\Controllers\backend\ManController@Man_Update')->name('main/edit');
        Route::get('main/Delete/{id}', 'App\Http\Controllers\backend\ManController@Man_Delete')->name('main/Delete');
        // main route edd



        // woman route start
        Route::get('woman/List', 'App\Http\Controllers\backend\WomanController@ShowWomanList')->name('woman/list');
        Route::get('woman/form', 'App\Http\Controllers\backend\WomanController@ShowWomanForm')->name('woman/form');
        Route::post('woman/form', 'App\Http\Controllers\backend\WomanController@WomanValidation');
        Route::get('woman/edit/{id}', 'App\Http\Controllers\backend\WomanController@Woman_Edit')->name('woman/edit');
        Route::put('woman/edit/{id}', 'App\Http\Controllers\backend\WomanController@Woman_Update')->name('woman/edit');
        Route::get('woman/delete/{id}', 'App\Http\Controllers\backend\WomanController@Woman_Delete')->name('woman/delete');
        // woman route edd



        //child route start
        Route::get('child/List', 'App\Http\Controllers\backend\ChildController@ShowChildList')->name('child/list');
        Route::get('child/form', 'App\Http\Controllers\backend\ChildController@ShowChildForm')->name('child/form');
        Route::post('child/form', 'App\Http\Controllers\backend\ChildController@ChildValidation');
        Route::get('child/edit/{id}', 'App\Http\Controllers\backend\ChildController@Child_Edit')->name('child/edit');
        Route::put('child/edit/{id}', 'App\Http\Controllers\backend\ChildController@ChildEditFuunction')->name('child/edit');
        Route::get('Child/delete/{id}', 'App\Http\Controllers\backend\ChildController@Child_Delete')->name('Child/delete');
        //child route edd



        // Electronic 1 route start
        Route::get('Electronic/List', 'App\Http\Controllers\backend\ElectronicController@Electroniclist')->name('Electronic/list');
        Route::get('Electronic/form', 'App\Http\Controllers\backend\ElectronicController@ElectronicAdd')->name('Electronic/form');
        Route::post('Electronic/form', 'App\Http\Controllers\backend\ElectronicController@ElectronicValidation');
        // Electronic 1 route edd




        // Electronic 2 route start
        Route::get('Electronic2/List', 'App\Http\Controllers\backend\Electronic2Controller@Electronic2list')->name('Electronic2/list');
        Route::get('Electronic2/form', 'App\Http\Controllers\backend\Electronic2Controller@Electronic2Add')->name('Electronic2/form');
        Route::post('Electronic2/form', 'App\Http\Controllers\backend\Electronic2Controller@Electronic2Validation');
        // Electronic 2 route edd




        // Electronic 3 route start
        Route::get('Electronic3/List', 'App\Http\Controllers\backend\Electronic3Controller@Electronic3list')->name('Electronic3/list');
        Route::get('Electronic3/form', 'App\Http\Controllers\backend\Electronic3Controller@Electronic3Add')->name('Electronic3/form');
        Route::post('Electronic3/form', 'App\Http\Controllers\backend\Electronic3Controller@Electronic3Validation');
        // Electronic 3 route edd




        // Electronic 1 route start
        Route::get('Jewellery1/List', 'App\Http\Controllers\backend\Jewellery1Controller@Jewellery1list')->name('Jewellery1/list');
        Route::get('Jewellery1/form', 'App\Http\Controllers\backend\Jewellery1Controller@Jewellery1Add')->name('Jewellery1/form');
        Route::post('Jewellery1/form', 'App\Http\Controllers\backend\Jewellery1Controller@Jewellery1Validation');
        // Electronic 1 route edd



        // Electronic 2 route start
        Route::get('Jewellery2/List', 'App\Http\Controllers\backend\Jewellery2Controller@Jewellery2list')->name('Jewellery2/list');
        Route::get('Jewellery2/form', 'App\Http\Controllers\backend\Jewellery2Controller@Jewellery2Add')->name('Jewellery2/form');
        Route::post('Jewellery2/form', 'App\Http\Controllers\backend\Jewellery2Controller@Jewellery2Validation');
        // Electronic 2 route edd



        // Electronic 3 route start
        Route::get('Jewellery3/List', 'App\Http\Controllers\backend\Jewellery3Controller@Jewellery3list')->name('Jewellery3/list');
        Route::get('Jewellery3/form', 'App\Http\Controllers\backend\Jewellery3Controller@Jewellery3Add')->name('Jewellery3/form');
        Route::post('Jewellery3/form', 'App\Http\Controllers\backend\Jewellery3Controller@Jewellery3Validation');
        // Electronic 3 route edd



        // Electronic 1 route start
        Route::get('Title/List', 'App\Http\Controllers\backend\TitleController@ShowTitleList')->name('Title/List');
        Route::get('Title/Form', 'App\Http\Controllers\backend\TitleController@TitleFormShow')->name('Title/Form');
        Route::post('Title/Form', 'App\Http\Controllers\backend\TitleController@TitleValidation');
        // Electronic 1 route edd



        // Categroy start
        Route::get('Categroy/List', 'App\Http\Controllers\backend\ManCategoryController@Man_Categroy_List')->name('Categroy/List');
        Route::get('Categroy/Add', 'App\Http\Controllers\backend\ManCategoryController@Man_Categroy_Add')->name('Categroy/Add');
        Route::post('Categroy/Add', 'App\Http\Controllers\backend\ManCategoryController@Man_Categroy_Function');
        Route::get('Categroy/Edit/{id}', 'App\Http\Controllers\backend\ManCategoryController@Man_Edit_Show_Form')->name('Categroy/Edit');
        Route::put('Categroy/Edit/{id}', 'App\Http\Controllers\backend\ManCategoryController@Man_Categroy_Upadate')->name('Categroy/Edit');
        Route::get('Categroy/Delete/{id}', 'App\Http\Controllers\backend\ManCategoryController@Man_Categroy_Delete')->name('Categroy/Delete');
        Route::get('Status/{id}', 'App\Http\Controllers\backend\ManCategoryController@Status');
        // Categroy edd


        //Sub categroy Start
        Route::get('Sub/Categroy/List', 'App\Http\Controllers\backend\SubCategoryController@Sub_Categroy_List')->name('Sub/Categroy/List');
        Route::get('Sub/Categroy/Add', 'App\Http\Controllers\backend\SubCategoryController@Sub_Categroy_Add')->name('Sub/Categroy/Add');
        Route::post('Sub/Categroy/Add', 'App\Http\Controllers\backend\SubCategoryController@SubCategroyFunction')->name('Sub/Categroy/Add');
        Route::get('Sub/Categroy/Edit/{id}', 'App\Http\Controllers\backend\SubCategoryController@Sub_Categroy_Edit')->name('Sub/Categroy/Edit');
        Route::put('Sub/Categroy/Update/{id}', 'App\Http\Controllers\backend\SubCategoryController@Sub_Categroy_Update')->name('Sub/Categroy/Update');
        Route::get('Sub/Categroy/Delete/{id}', 'App\Http\Controllers\backend\SubCategoryController@Sub_Categroy_Delete')->name('Sub/Categroy/Delete');

        Route::get('Sub/Categroy/Status/{id}', 'App\Http\Controllers\backend\SubCategoryController@SubStatus')->name('Sub/Categroy/Status');
        //Sub categroy Start


    });
});











/*-------------------------- Front --------------------------*/
Route::get('Home', 'App\Http\Controllers\front\HomeController@HomePage');
Route::get('Jewellery', 'App\Http\Controllers\front\HomeController@Jewellery');
Route::get('fashion', 'App\Http\Controllers\front\HomeController@fashion');
Route::get('electronic', 'App\Http\Controllers\front\HomeController@electronic');

Route::get('Home', 'App\Http\Controllers\front\ManFashion@Shirat_Scart');
Route::get('Electronic', 'App\Http\Controllers\front\ElectronicController@Electronic');



