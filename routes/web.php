<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpaController;
use App\Http\Controllers\MpaController;

// Route::get('/{any}', [SpaController::class, 'spa'])->where('any', '.*');

Route::controller(MpaController::class)->group(function () {
    Route::get('/mpa-home', 'home')->name('mpa.home');
    Route::get('/mpa-about', 'about')->name('about');
    Route::get('/mpa-contact', 'contact')->name('contact');
});

Route::controller(SpaController::class)->group(function () {
    Route::get('/{any}', 'spa')->where('any', '.*');
    Route::get('/mpa-home', 'mpa')->name('mpa.home');
});
