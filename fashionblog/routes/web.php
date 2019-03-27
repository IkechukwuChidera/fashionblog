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

//AIzaSyAGNHadTk5scC9VTsEylaHcDXpVct_bUMw
//539782493213804
//2311cf994f2dcfc640abf38a8a9f175f
//console.google.com
//859833068942-p0b5oc41i2jv4hes0stpqf7cp0jed6oi.apps.googleusercontent.com
//secret: 2C7MjuI46dHhge7wN0xaRpl9

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/rdirect', 'SocialAuthFacebookController@rdirect');
Route::get('/cllback', 'SocialAuthFacebookController@cllback');

Route::get('/redirect', 'SocialAuthGoogleController@redirect');
Route::get('/callback', 'SocialAuthGoogleController@callback');

//paystack
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');

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

//socialite
// Route::get('/redirect', 'Auth\LoginController@redirectToProvider');
// Route::get('/callback', 'Auth\LoginController@handleProviderCallback');


Route::get('google', function () {
    return view('google');
});

Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');

// Route::get('auth/google', 'Auth\LoginController@redirectToGoogle');
// Route::get('auth/google/callback', 'Auth\LoginController@handleGoogleCallback');

// Route::get('auth/callback/{provider}', 'SocialAuthController@callback' );
// Route::get('auth/redirect/{provider}', 'SocialAuthController@redirect');
// Route::get('auth/redirect/{provider}', 'SocialAuthController@createOrGetUser');

// Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
// Route::get('login/{provider}/callback','Auth\LoginController@handleProviderCallback');
//
// Route::get('/social/redirect/{provider}', ['as' => 'social.redirect', 'uses' => 'Auth\SocialController@getSocialRedirect']);
// Route::get('/social/handle/{provider}', ['as' => 'social.handle', 'uses' => 'Auth\SocialController@getSocialHandle']);

// Route::get('facebook', function () {
//     return view('facebook');
// });
//
// Route::get('auth/facebook', 'Auth\FacebookController@redirectToFacebook');
// Route::get('auth/facebook/callback', 'Auth\FacebookController@handleFacebookCallback');
