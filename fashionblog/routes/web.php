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

Route::get('/admin/index', 'AdminController@index');
<<<<<<< HEAD
Route::resource('admin', 'AdminController');
Route::get('/admin/add', 'AdminController@create');
// Route::post('/admin/addproduct', 'AdminController@store');
=======

Route::get('/admin/addproduct', 'AdminController@add');


// Route::get('/admin/add', 'AdminController@get');
>>>>>>> 810d35e610547e6c7387922a50d0e850ce1e5863
