<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\CustomersController;
use App\Http\Controllers\Admin\RoleController;

Route::group([
    'domain' => 'suadmin.'.env('APP_DOMAIN', 'localhost'),
//    'namespace' => 'Admin',
    'as' => 'admin.'
], function () {
    Route::fallback(function () {
        return view('404');
    });

//    Route::group([
//        'namespace' => 'Auth',
//        'as' => 'auth.'
//    ], function () {
//        Route::get('login', 'LoginController@showLoginForm')->name('loginForm');
//        Route::get('login', [\App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('loginForm');
//        Route::post('login', [\App\Http\Controllers\Admin\Auth\LoginController::class, 'login'])->name('login');
//        Route::get('logout', 'LoginController@logout')->name('logout');
//    });

    Route::group([
        'middleware' => ['auth', 'admin']
    ], function () {
        Route::get('/roles', [\App\Http\Controllers\Admin\RoleController::class, 'index'])->name('roles');
        Route::resource('customers', CustomersController::class);
//        Route::resource('roles', RoleController::class);
    });
});
