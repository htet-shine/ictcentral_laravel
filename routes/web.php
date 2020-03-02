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

// Route::get('/', function () {
//   return view('welcome');
// });

Route::get('/', 'HomePageController@index')->name('home');
Route::get('/home', 'HomePageController@index')->name('home');

// All products show
Route::get('/products', 'ProductController@index')->name('products.index');

// Single Products show
Route::get('/products/{product}','ProductController@show')->name('products.show');

// Cart
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::get('/cart/empty', 'CartController@empty')->name('cart.empty');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');

// Checkout
Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');

Route::get('/thankyou', 'ConfirmationController@index')->name('confirmation.index');

Route::get('/test', 'ProductController@test');

// Route::view('/checkout', 'checkout');
Route::view('/contact', 'contact');
Route::view('/about', 'about');
Route::view('/login', 'login');
Route::view('/register', 'register');
// Route::view('/thankyou', 'thankyou');
