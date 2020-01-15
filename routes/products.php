<?php

/*
|--------------------------------------------------------------------------
| Product Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/products/list', 'ProductController@list');

Route::prefix('products')->group(function () {
    Route::get('get/{id}', 'ProductController@getProduct');

    // Redirect route
    Route::redirect('/all', '/products/list');
});