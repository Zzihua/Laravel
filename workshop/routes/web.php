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
        Route::get('home', 'App\Http\Controllers\UserAuthController@Home');
        Route::get('login', 'App\Http\Controllers\UserAuthController@Login')->name('user.auth.login');
        Route::post('login', 'App\Http\Controllers\UserAuthController@LoginProcess');
        Route::get('signup', 'App\Http\Controllers\UserAuthController@Signup') ->name('user.auth.signup');
        Route::post('signup', 'App\Http\Controllers\UserAuthController@SignUpProcess');
        Route::get('signout', 'App\Http\Controllers\UserAuthController@Signout')->name('user.auth.signout');
        Route::get('profile/{id}', 'App\Http\Controllers\UserAuthController@Profile');
    });

    Route::group(['prefix' => 'merchandise'], function () {
        // Route::get('{merchandise_id}', 'App\Http\Controllers\MerchandiseController@MerchandiseItemPage');
        Route::get('create', 'App\Http\Controllers\MerchandiseController@MerchandiseCreate');

        Route::group(['prefix' => '{merchandise_id}'], function(){
            Route::get('edit','App\Http\Controllers\MerchandiseController@MerchandiseEdit');
        });
    });
});



