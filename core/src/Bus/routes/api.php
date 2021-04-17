<?php

Route::group(['prefix' => 'api', 'middleware' => ['auth:api']], function () {
    # V1
    Route::namespace('Core\Bus\Controllers\API\V1')->prefix('v1')->name('api.v1.')->group(function () {
        #*** START: Booking ***#
        Route::apiResource('bookings', 'BookingController');
        #*** END: Booking ***#
    });
});
