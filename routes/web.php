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

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::resource('products', 'ProductsController');
    // Route::resource('categories', 'CategoriesController');

});

Route::post('products/{id}/images', 'ProductsController@images');

Auth::routes();

// Route::get('faq', '....Controller@faq');

Route::get('/home', 'HomeController@index')->name('home');
