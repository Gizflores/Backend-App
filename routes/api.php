<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('foo', function () {
    return [1,2,3,4,5,6,7,8,9,11,"Hola"];
});

Route::post('/postUser','ApiUserController@create');
Route::get('/getUser','ApiUserController@show');
Route::post('/postBoutique','ApiBoutiqueController@create');
Route::get('/getBoutique','ApiBoutiqueController@show');
Route::get('/getGallery','ApiGalleryController@show');
