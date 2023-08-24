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
// Route::post('register','App\Http\Controllers\Auth\Auths@RegisterFormFunction');
// Route::post('login','App\Http\Controllers\Auth\Auths@loginUser');

// Route::middleware('auth:sanctum')->group( function () {
// Route::post('user','App\Http\Controllers\Auth\Auths@profile');
// Route::post('logout','App\Http\Controllers\Auth\Auths@logoutsss');

// });


// *********  Man Api Routing **********//
Route::post('Manlisting',('App\Http\Controllers\Api\ManApi@Main_Api_Function'));
Route::post('Man_Add',('App\Http\Controllers\Api\ManApi@Man_Add'));
Route::post('Fatch_Data/{id}',('App\Http\Controllers\Api\ManApi@Fatch_Data'));
Route::post('Update_Data/{id}',('App\Http\Controllers\Api\ManApi@Update_Data'));
Route::post('Delete_Data/{id}',('App\Http\Controllers\Api\ManApi@Delete_Data'));

// ************ Woman Api *************//
Route::post('Woman_List',('App\Http\Controllers\Api\WomanApi@Woman_List'));
Route::post('Woman_Data_Add',('App\Http\Controllers\Api\WomanApi@Woman_Data_Add'));
Route::post('Woman_Fatch/{id}',('App\Http\Controllers\Api\WomanApi@Woman_Fatch'));
Route::post('Woman_Update/{id}',('App\Http\Controllers\Api\WomanApi@Woman_Update'));
Route::post('Woman_Delete/{id}',('App\Http\Controllers\Api\WomanApi@Woman_Delete'));


// ***********  Child Api *************
Route::post('Child',('App\Http\Controllers\Api\ChildApi@Child_function'));
Route::post('Child_add',('App\Http\Controllers\Api\ChildApi@Chlid_add'));
Route::post('Child_Fatch/{id}',('App\Http\Controllers\Api\ChildApi@Child_Fatch_data'));
Route::post('Update_Api_Data/{id}',('App\Http\Controllers\Api\ChildApi@Update_Api_Data'));
Route::post('Child_Delete/{id}',('App\Http\Controllers\Api\ChildApi@Child_Delete'));


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








