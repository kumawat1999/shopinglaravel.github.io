<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// *********  Man Api Routing **********//
Route::post('Manlisting',('App\Http\Controllers\Api\ManApi@Main_Api_Function'));
Route::post('Man_Add',('App\Http\Controllers\Api\ManApi@Man_Add'));

// ************ Woman Api *************//
Route::post('Woman_List',('App\Http\Controllers\Api\WomanApi@Woman_List'));
Route::post('WomanFunction',('App\Http\Controllers\Api\WomanApi@Woman_Api_Function'));


// ***********  Child Api *************
Route::post('Child',('App\Http\Controllers\Api\ChildApi@Child_function'));
Route::post('Child_add',('App\Http\Controllers\Api\ChildApi@Chlid_add'));


// ***********  Electronic Api *************
Route::post('Electronic_List',('App\Http\Controllers\Api\ElectronicController@Electronic_List'));
Route::post('Electronic_add',('App\Http\Controllers\Api\ElectronicController@Electronic_add'));


// ***********  Electronic 2 Api *************
Route::post('Electronic2_list',('App\Http\Controllers\Api\Electronic2Controller@Electronic2_list'));
Route::post('Electronic2_add',('App\Http\Controllers\Api\Electronic2Controller@Electronic2_add'));


// ***********  Electronic 3 Api *************
Route::post('Electronic3_list',('App\Http\Controllers\Api\Electronic3Controller@Electronic3_list'));
Route::post('Electronic3_add',('App\Http\Controllers\Api\Electronic3Controller@Electronic3_add'));



// ***********  Jewellery 1 Api *************
Route::post('Jewellery1_List',('App\Http\Controllers\Api\Jewellery1Controller@Jewellery1_List'));
Route::post('Jewellery1_add',('App\Http\Controllers\Api\Jewellery1Controller@Jewellery1_add'));



// ***********  Jewellery 2 Api *************
Route::post('Jewellery2_List',('App\Http\Controllers\Api\Jewellery2Controller@Jewellery2_List'));
Route::post('Jewellery2_add',('App\Http\Controllers\Api\Jewellery2Controller@Jewellery2_add'));



// ***********  Jewellery 2 Api *************
Route::post('Jewellery3_List',('App\Http\Controllers\Api\Jewellery3Controller@Jewellery3_List'));
Route::post('Jewellery3_add',('App\Http\Controllers\Api\Jewellery3Controller@Jewellery3_add'));






