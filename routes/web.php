<?php

use Boufoun\CookiePreference\Controllers\CookiePreferenceController;

Route::name('cookie-preference.')->group(function () {
    Route::post(
    	trans('cookie-preference::routes.update'),
    	[CookiePreferenceController::class, 'update']
    )->name('update');

    Route::any(
    	trans('cookie-preference::routes.manage'),
    	[CookiePreferenceController::class, 'manage']
    )->name('manage');

});