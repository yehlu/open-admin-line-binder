<?php

use Illuminate\Support\Facades\Route;
use Yehlu\OpenAdmin\Controllers\LineNotifyAuthController;
use Yehlu\OpenAdmin\Facades\LineNotify;

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => LineNotify::getRoutePrefix(),
], function () {

    $controller = LineNotifyAuthController::class;

    Route::get('notify-cancel', $controller.'@cancel')->name(LineNotify::getRouteNameForCancel());
    Route::get('notify-callback', $controller.'@callback')->name(LineNotify::getRouteNameForCallback());
    
});
