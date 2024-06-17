<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CarouselController;
use App\Http\Controllers\Admin\DescriptionController;
use App\Http\Controllers\Admin\ServiceController;

Route::get('/layouts', function () {
    return view('layouts.admin');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('carousels', CarouselController::class);
    Route::resource('descriptions', DescriptionController::class);
    Route::resource('services', ServiceController::class);
});


Route::get('/', function () {
    return view('index');
});

Route::get('/internetlayanan', function () {
    return view('internetlayanan');
})->name('internetlayanan');

// Corrected syntax and added route name
Route::get('/profile', function () {
    return view('profile');
})->name('profile');
