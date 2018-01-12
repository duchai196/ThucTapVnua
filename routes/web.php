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

    Route::post('category/delete', 'CategoryController@postDelete')->name('category.delete');
    Route::post('product/delete', 'ProductController@postDelete')->name('product.delete');
    Route::post('post/delete', 'TypePostController@postDelete')->name('type-post.ajax');
    Route::post('brand/delete', 'BrandController@postDelete')->name('brand.ajax');
    Route::post('banner/delete', 'BannerController@postDelete')->name('banner.delete');

    Route::resources(
        [
            'category' => 'CategoryController',
            'brand' => 'BrandController',
            'product' => 'ProductController',
            'customer' => 'CustomerController',
            'type-post' => 'TypePostController',
            'post' => 'PostController',
            'banner' => 'BannerController'
        ]
    );

});


Route::get('/', 'HomeController@index')->name('home');

Route::get('/trang-chu', 'HomeController@index')->name('index');
//Route::view('/trang-chu', 'frontend.pages.index')->name('index');
Route::view('/tin-tuc', 'frontend.pages.blog')->name('blog');
Route::view('/lien-he', 'frontend.pages.contact')->name('contact');
Route::view('/gioi-thieu', 'frontend.pages.about')->name('about');


Route::view('/danh-muc', 'frontend.pages.category');


