<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => 'auth:api'], function () {

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/users', 'UserController@index');
    Route::post('users', 'UserController@store');

});
