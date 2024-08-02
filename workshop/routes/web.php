<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/123', function () {
//     return "hello world";
// });


// Route::get('/user/auth/login', 'App\Http\Controllers\UserAuthController@Login');
// Route::get('/user/{id}', 'App\Http\Controllers\UserAuthController@Profile');

Route::group(['prefix' => 'user'], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::get('login', 'App\Http\Controllers\UserAuthController@Login');
        Route::get('profile/{id}', 'App\Http\Controllers\UserAuthController@Profile');
    });
});
