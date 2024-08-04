<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/123', function () {
//     return "hello world";
// });


Route::group(['prefix' => 'user'], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::get('login', 'App\Http\Controllers\UserAuthController@Login');
        Route::get('signup', 'App\Http\Controllers\UserAuthController@Signup');
        Route::post('signup', 'App\Http\Controllers\UserAuthController@SignUpProcess');
        Route::get('profile/{id}', 'App\Http\Controllers\UserAuthController@Profile');
    });

    Route::group(['prefix' => 'merchandise'], function () {
        Route::get('{merchandise_id}', 'App\Http\Controllers\MerchandiseController@MerchandiseItemPage');
    });
});



