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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'language'], function () {
    Route::post('/', [
        'Middleware' => 'LanguageSwitcher',
        'uses' => 'LanguageController@index'
    ]);
});

Route::group(['prefix' => 'view'], function () {
    Route::get('/order-detail', ['as' => 'product', 'uses' => 'ProductController@index']);
	Route::get('/proceed', ['as' => 'product', 'uses' => 'ProductController@proceed']);

});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', ['as' => 'admin', 'uses' => 'AdminsController@index']);
    Route::get('/edit/{id?}', ['as' => 'view_products', 'uses' => 'AdminsController@view_product']);
    Route::get('/delete/{id}', ['as' => 'view_products', 'uses' => 'AdminsController@delete_product']);
    Route::get('/add_product', ['as' => 'add_product', 'uses' => 'AdminsController@add_product']);
});
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'categories'], function () {

    Route::get('/viewcategory', ['as' => 'categories/view-categories', 'uses' => 'CategoryController@index']);


});
