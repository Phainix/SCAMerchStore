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

// Home Route
Route::get('/home', 'StoreController@index')->name('home');

// Shop Route
Route::get('/shop', 'StoreController@shop')->name('frontend.store');

Route::get('/checkout', 'StoreController@checkout')->name('frontend.checkout');