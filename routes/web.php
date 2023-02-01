<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

//There is no front-end, feel free to build your own !
Route::redirect('/', 'login');

//All your dashboard's routes going to be here.
Route::group([
    'as'         => 'panel.',
    'middleware' => [
        'verified',
        AdminMiddleware::class,
    ],
], static function () {
    Route::get('dashboard', DashboardController::class)->name('dashboard');

    Route::resource('client', ClientController::class);

    Route::post('/test', static function () {
        $dates = explode(' - ', request()->get('toto'));

        $start = \Carbon\Carbon::parse($dates[0]);
        $end = \Carbon\Carbon::parse($dates[1]);

    })->name('test');
});
