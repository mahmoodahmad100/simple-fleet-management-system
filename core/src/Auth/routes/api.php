<?php

Route::group(['prefix' => 'api'], function () {
    # V1
    Route::namespace('Core\Auth\Controllers\API\V1')->prefix('v1')->name('api.v1.')->group(function () {
        #*** START: Auth ***#
        Route::group(['prefix' => 'auth'], function () {
            Route::post('login', 'AuthController@login')->name('login');
            Route::put('update', 'AuthController@updateAuth')->name('update');
            Route::get('logout', 'AuthController@logout')->name('logout');
            Route::get('refresh', 'AuthController@refresh')->name('refresh');
            Route::get('me', 'AuthController@me')->name('me');
        });
        #*** END: Auth ***#
    });
});
