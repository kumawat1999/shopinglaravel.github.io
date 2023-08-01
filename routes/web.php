<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\Admin;
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

Route::get('login', 'App\Http\Controllers\Auth\LoginController@ShowLoginForm')->name('login');
Route::post('login', 'App\Http\Controllers\Auth\LoginController@LoginFormFunction')->name('login');
Route::any('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::get('register', 'App\Http\Controllers\Auth\RegisterController@ShowRegisterForm')->name('register');
Route::post('register', 'App\Http\Controllers\Auth\RegisterController@RegisterFormFunction');



Route::group(['middleware' => 'loginss'], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('Dashbord', [Admin::class, 'index']);

        Route::get('tables', [Admin::class, 'tables'])->name('tables');

        Route::get('main/List', 'App\Http\Controllers\backend\ManController@ShowList')->name('main/list');
        Route::get('main/form', 'App\Http\Controllers\backend\ManController@ShowForm')->name('main/form');
        Route::post('main/form', 'App\Http\Controllers\backend\ManController@ShirtValidation');


        Route::get('woman/List', 'App\Http\Controllers\backend\WomanController@ShowWomanList')->name('woman/list');
        Route::get('woman/form', 'App\Http\Controllers\backend\WomanController@ShowWomanForm')->name('woman/form');
        Route::post('woman/form', 'App\Http\Controllers\backend\WomanController@WomanValidation');


        Route::get('child/List', 'App\Http\Controllers\backend\ChildController@ShowChildList')->name('child/list');
        Route::get('child/form', 'App\Http\Controllers\backend\ChildController@ShowChildForm')->name('child/form');
        Route::post('child/form', 'App\Http\Controllers\backend\ChildController@ChildValidation');


        Route::get('Electronic/List', 'App\Http\Controllers\backend\ElectronicController@Electroniclist')->name('Electronic/list');
        Route::get('Electronic/form', 'App\Http\Controllers\backend\ElectronicController@ElectronicAdd')->name('Electronic/form');
        Route::post('Electronic/form', 'App\Http\Controllers\backend\ElectronicController@ElectronicValidation');


        Route::get('Electronic2/List', 'App\Http\Controllers\backend\Electronic2Controller@Electronic2list')->name('Electronic2/list');
        Route::get('Electronic2/form', 'App\Http\Controllers\backend\Electronic2Controller@Electronic2Add')->name('Electronic2/form');
        Route::post('Electronic2/form', 'App\Http\Controllers\backend\Electronic2Controller@Electronic2Validation');


        Route::get('Electronic3/List', 'App\Http\Controllers\backend\Electronic3Controller@Electronic3list')->name('Electronic3/list');
        Route::get('Electronic3/form', 'App\Http\Controllers\backend\Electronic3Controller@Electronic3Add')->name('Electronic3/form');
        Route::post('Electronic3/form', 'App\Http\Controllers\backend\Electronic3Controller@Electronic3Validation');


        Route::get('Jewellery1/List', 'App\Http\Controllers\backend\Jewellery1Controller@Jewellery1list')->name('Jewellery1/list');
        Route::get('Jewellery1/form', 'App\Http\Controllers\backend\Jewellery1Controller@Jewellery1Add')->name('Jewellery1/form');
        Route::post('Jewellery1/form', 'App\Http\Controllers\backend\Jewellery1Controller@Jewellery1Validation');


        Route::get('Jewellery2/List', 'App\Http\Controllers\backend\Jewellery2Controller@Jewellery2list')->name('Jewellery2/list');
        Route::get('Jewellery2/form', 'App\Http\Controllers\backend\Jewellery2Controller@Jewellery2Add')->name('Jewellery2/form');
        Route::post('Jewellery2/form', 'App\Http\Controllers\backend\Jewellery2Controller@Jewellery2Validation');


        Route::get('Jewellery3/List', 'App\Http\Controllers\backend\Jewellery3Controller@Jewellery3list')->name('Jewellery3/list');
        Route::get('Jewellery3/form', 'App\Http\Controllers\backend\Jewellery3Controller@Jewellery3Add')->name('Jewellery3/form');
        Route::post('Jewellery3/form', 'App\Http\Controllers\backend\Jewellery3Controller@Jewellery3Validation');

        Route::get('Title/List', 'App\Http\Controllers\backend\TitleController@ShowTitleList')->name('Title/List');
        Route::get('Title/Form', 'App\Http\Controllers\backend\TitleController@TitleFormShow')->name('Title/Form');
        Route::post('Title/Form', 'App\Http\Controllers\backend\TitleController@TitleValidation');
    });
});
















/*-------------------------- Front --------------------------*/
Route::get('fronts', 'App\Http\Controllers\front\HomeController@HomePage');
Route::get('fronts', 'App\Http\Controllers\front\ManFashion@Shirat_Scart');
Route::get('Electronic', 'App\Http\Controllers\front\ElectronicController@Electronic');
