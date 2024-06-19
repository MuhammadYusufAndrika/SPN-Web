<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CarouselController;
use App\Http\Controllers\Admin\DescriptionController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LayananInternetController;
use App\Http\Controllers\PengaduanController;

use App\Models\LayananInternet;
use App\Models\Pengaduan;

Route::get('/',[IndexController::class, 'index']);

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('carousels', CarouselController::class);
    Route::resource('descriptions', DescriptionController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('layanan-internet', LayananInternetController::class);
});

Route::get('/internetlayanan', function () {
    // $descriptions = LayananInternet::all();
    return view('internetlayanan');
})->name('internetlayanan');

// Corrected syntax and added route name
Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('create-contact', [PengaduanController::class, "store"]);
// Route::resource('layanan-jarkom', [PengaduanController::class, "store"]);

