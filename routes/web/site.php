<?php

Route::group([
    'domain' => config('app.domain'),
    'namespace' => 'Front',
    'as' => 'front.'
], function () {
//    Route::fallback('ErrorController@notFound')->name('404');


    Route::get('/', [\App\Http\Controllers\Front\HomeController::class, 'index'])->name('index');

//    Route::get('services/{slug}', 'ServiceCategoriesController@show')->name('services.show');

    Route::group([
        'prefix' => 'news',
        'as' => 'news.',
    ], function () {
//        Route::get('', [NewsController::class, 'index'])->name('index');
//        Route::get('{slug}', 'NewsController@show')->name('show');
//        Route::get('create', 'NewsController@create')->name('create');
//        Route::post('store', 'NewsController@store')->name('store');
//        Route::put('update/{news}', 'NewsController@update')->name('update');
//        Route::delete('destroy/{news}', 'NewsController@destroy')->name('destroy');
//        Route::delete('image/{news?}', 'NewsController@deleteImage')->name('destroy.image');
    });

});
