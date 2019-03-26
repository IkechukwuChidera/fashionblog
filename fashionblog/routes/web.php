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
//routes for fashionblog Adminpanel



Route::get('/admin/index', 'AdminController@index');

//route for posting and getting from db
Route::get('/admin/addproduct', 'AdminController@addproduct');
Route::post('/admin/addproduct', 'AdminController@storeproduct')->name('prod');

//triAL
Route::get('/admin/addcategory', 'AdminController@addcategory');
Route::post('/admin/addcategory', 'AdminController@store');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
