<?php

Route::group(['prefix' => 'admin'], function () {
    Route::resource('/product/product', 'Lavalite\Product\Http\Controllers\ProductAdminController');
});

// User routes for product
Route::group(['prefix' => 'user'], function () {
    Route::resource('/product/product', 'Lavalite\Product\Http\Controllers\ProductUserController');
});

// Public routes for product
Route::get('product/product', 'Lavalite\Product\Http\Controllers\ProductPublicController@index');
Route::get('product/product/{slug?}', 'Lavalite\Product\Http\Controllers\ProductPublicController@show');
