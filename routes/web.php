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

Route::group(['namespace' => 'Backend', 'prefix' => 'admin'], function () {
    Route::resource('category', 'CategoryController');
    Route::resource('product', 'ProductController');
    Route::resource('customer', 'CustomerController');
    Route::resource('type-post', 'TypePostController');
    Route::resource('post', 'PostController');
    Route::post('delete', 'CategoryController@postDelete')->name('category.delete');

});

Route::view('editor', 'vendor.laravel-filemanager.demo');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
