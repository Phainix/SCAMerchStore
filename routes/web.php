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

// Basic Route
Route::get('/home', function() {
    return 'This is the home page!!!';
});

// Required Param Route
Route::get('/basic/{name}', function($name) {
    return "Welcome home $name, its glad to have you here";
});

// Optional Param Routes
Route::get('/optional/param/{age?}', function($age = null) {
    return "Hi there, this is an optional param route, this means you can omit route paramaters. On this page you entered " . ($age == null ? "nothing" : $age);
});

Route::get('/optional/default/param/{age?}', function($age = 50) {
    return "Hi there, this is an optional param route with a default value, this means you can omit route paramaters. On this page you entered $age";
});

// Routes with param constraints

Route::get('/param/constraint/{age}', function($age) {
    return "This route expects your age and should only permit integers as the route param. You entered Age: $age. It " . (preg_match("/^\d+$/",$age) ? "worked" : "did not work");
})->where('age', '[0-9]+');

Route::get('/param/constraint/{name}', function($name) {
    return "This route expects your name and should only permit alphabets as the route param. You entered Name: $name. It " . (preg_match("/^([a-zA-Z']+)$/",$name) ? "worked" : "did not work");
})->where('name', '[a-z]+');

// Named routes
Route::get('/named/route', function () {
    return "This is a named route";
})->name('named-route');

Route::get('/named/route/test', function () {
    return "<a href='" . route('named-route') ."'>This is a redirects to a route</a>";
});

Route::get('/contact_us', 'ContactController');

