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

Route::get('/',['as'=> 'home','uses'=>'PagesController@getHome']);

Route::get('credits', function () {
    return view('credits');
});

//Administrator Routes
Route::resource('products','AdminController');



//CartController Routes:
Route::get('cart/{id}',[
	'as'=>'cart.add', 
	'uses'=>'CartController@getAddToCart'
	]);

Route::get('cart',[
	'as'=>'cart.index',
	'uses'=>'CartController@getCartIndex']);

Route::match(['post','put'],'updateitem/{rowId}',[
	'as'=>'item.update',
	'uses'=> 'CartController@UpdateItem'
	]);

Route::post('deleteitem/{rowId}',[
	'as'=>'item.delete',
	'uses'=>'CartController@DeleteItem']);