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

Route::get('/home', 'HomeController@index')->name('home');
//fashionblog
Route::get('users/index', 'UserController@index');
Route::get('users/about', 'UserController@about');
Route::get('users/blog-detail', 'UserController@blog_detail');
Route::get('users/blog', 'UserController@blog');
Route::get('users/contact', 'UserController@contact');
Route::get('users/home-02', 'UserController@home_02');
Route::get('users/home-03', 'UserController@home_03');
Route::get('users/product-detail', 'UserController@product_detail');
Route::get('users/product', 'UserController@product');
Route::get('users/shoping-cart', 'UserController@shoping_cart');
