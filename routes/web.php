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
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'AdminController@getDashboard');
    Route::resource('category', 'CategoryController');
    Route::resource('brand', 'BrandController');
    Route::resource('product', 'ProductController');
    Route::resource('customer', 'CustomerController');
    Route::resource('type-post', 'TypePostController');
    Route::resource('post', 'PostController');
    Route::post('category/delete', 'CategoryController@postDelete')->name('category.delete');
    Route::post('product/delete', 'ProductController@postDelete')->name('product.delete');
    Route::post('post/delete', 'TypePostController@postDelete')->name('type-post.ajax');
    Route::post('brand/delete', 'BrandController@postDelete')->name('brand.ajax');

});


Route::get('/', 'HomeController@index')->name('home');

Route::view('/trang-chu', 'frontend.pages.index')->name('index');
Route::view('/tin-tuc', 'frontend.pages.blog')->name('blog');
Route::view('/lien-he', 'frontend.pages.contact')->name('contact');
Route::view('/gioi-thieu', 'frontend.pages.about')->name('about');
