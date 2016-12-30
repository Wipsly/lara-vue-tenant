<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Auth::routes();

// Route Group Auth Middleware
Route::group(['middleware' => 'auth'], function () {

    // Vue Wildcard Routes
    Route::get('/{catchall?}', function () {
        return view('layouts.app');
    })->where('catchall', '[\/\w\.-]*');

});
