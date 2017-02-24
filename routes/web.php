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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware'=> 'web'],function(){
});
Route::group(['middleware'=> 'web'],function(){
});
//stock Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('stock','\App\Http\Controllers\StockController');
  Route::post('stock/{id}/update','\App\Http\Controllers\StockController@update');
  Route::get('stock/{id}/delete','\App\Http\Controllers\StockController@destroy');
  Route::get('stock/{id}/deleteMsg','\App\Http\Controllers\StockController@DeleteMsg');
});

Route::group(['middleware'=> 'web'],function(){
  Route::resource('stockview','\App\Http\Controllers\StockViewController');
  Route::post('stockview/{id}/update','\App\Http\Controllers\StockViewController@update');
  Route::get('stockview/{id}/delete','\App\Http\Controllers\StockViewController@destroy');
  Route::get('stockview/{id}/deleteMsg','\App\Http\Controllers\StockViewController@DeleteMsg');
});
