<?php

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
    return view('home');
});

Route::group(['middleware' => 'auth'], function () {
    

});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('boutique','BoutiqueController');
Route::resource('categoria','CategoriaController');
Route::resource('gallery','GalleryController');
Route::resource('inventario','InventarioController');
Route::resource('likedislike','LikeDislikeController');
Route::resource('rates','RatesController');
Route::resource('talla','TallaController');
Route::resource('tallas_item','TallasItemController');
Route::resource('vista','VistaController');
Route::resource('users','CrudController');