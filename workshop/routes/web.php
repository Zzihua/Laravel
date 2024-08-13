<?php

use App\Http\Middleware\AuthUserAdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/123', function () {
//     return "hello world";
// });


Route::group(['prefix' => 'user'], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::get('home', 'App\Http\Controllers\UserAuthController@Home')->name('user.auth.home');
        Route::get('shop', 'App\Http\Controllers\UserAuthController@Shop')->name('user.auth.shop');
        Route::get('login', 'App\Http\Controllers\UserAuthController@Login')->name('user.auth.login');
        Route::post('login', 'App\Http\Controllers\UserAuthController@LoginProcess');
        // Route::get('signup', 'App\Http\Controllers\UserAuthController@Signup') ->name('user.auth.signup');
        Route::post('signup', 'App\Http\Controllers\UserAuthController@SignUpProcess');
        Route::get('signout', 'App\Http\Controllers\UserAuthController@Signout')->name('user.auth.signout');
        Route::get('profile/{id}', 'App\Http\Controllers\UserAuthController@Profile');
        Route::match(['get','post'],'fish','App\Http\Controllers\UserAuthController@Fish')->name('user.auth.fish');
        Route::get('cart1','App\Http\Controllers\UserAuthController@Cart1')->name('user.auth.cart1');
        Route::get('orderfinish','App\Http\Controllers\UserAuthController@OrderFinish')->name('user.auth.orderfinish');


        Route::get('super','App\Http\Controllers\UserAuthController@Super')->name('user.auth.super');
        Route::get('moon','App\Http\Controllers\UserAuthController@Moon')->name('user.auth.moon');
        Route::get('summer','App\Http\Controllers\UserAuthController@Summer')->name('user.auth.summer');
        Route::get('hotsale','App\Http\Controllers\UserAuthController@Hotsale')->name('user.auth.hotsale');
        
        Route::get('/', 'App\Http\Controllers\UserAuthController@CartProcess')->middleware(AuthUserAdminMiddleware::class);
        Route::post('/', 'App\Http\Controllers\UserAuthController@CartRemoveProcess')->middleware(AuthUserAdminMiddleware::class);

    });

    
});

// 建立merchandise群組路由
Route::group(['prefix' => 'merchandise'], function () {

    // 商品管理
    Route::get('manage', 'App\Http\Controllers\MerchandiseController@MerchandiseManage')->name('merchandise.manage');
    // 显示创建商品的表单
    Route::get('create','App\Http\Controllers\MerchandiseController@MerchandiseCreate')->name('merchandise.create');
    Route::post('/', 'App\Http\Controllers\MerchandiseController@MerchandiseCreateProcess')->name('merchandise.create.process');


    // // 处理表单提交的路由
    // Route::post('/', [App\Http\Controllers\MerchandiseController::class, 'CreateProcess'])->name('merchandise.create.process');
        

    // 商品修改、刪除   
    Route::group(['prefix' => '{merchandise_id}'], function () {
        Route::get('edit', 'App\Http\Controllers\MerchandiseController@MerchandiseEdit')->middleware(AuthUserAdminMiddleware::class);
        Route::put('/', 'App\Http\Controllers\MerchandiseController@MerchandiseEditProcess');
        Route::get('delete', 'App\Http\Controllers\MerchandiseController@MerchandiseDelete')->middleware(AuthUserAdminMiddleware::class);
    });

    // // 圖片上傳
    Route::post('upload', 'App\Http\Controllers\MerchandiseController@UploadImage')->middleware(AuthUserAdminMiddleware::class);
});