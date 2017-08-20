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
    return view('index');
});
Route::group(['prefix' => 'view'], function () {
    Route::get('/order-detail', ['as' => 'product', 'uses' => 'ProductController@index']);
	Route::get('/proceed', ['as' => 'product', 'uses' => 'ProductController@proceed']);

});



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
