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
Route::post('WomanFunction',('App\Http\Controllers\Api\WomanApi@Woman_Api_Function'));



