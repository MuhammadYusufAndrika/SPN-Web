<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\CarouselController;
use App\Http\Controllers\Admin\DescriptionController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Admin\LayananCCTVController;
use App\Http\Controllers\PengaduanController;

use App\Models\LayananInternet;
use App\Models\Pengaduan;



Route::get('/', [IndexController::class, 'index']);
Route::get('/cctvlayanan', [LayananCCTVController::class, 'index'])->name('cctvlayanan');

Route::prefix('admin')->name('admin.')->group(function () {
    // Rute untuk tampilan admin.blade.php
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');

    // Rute yang sudah ada
    Route::resource('carousels', CarouselController::class);
    Route::resource('descriptions', DescriptionController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('layanancctv', LayananCCTVController::class);
    Route::resource('contact', PengaduanController::class);
});

// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::resource('carousels', CarouselController::class);
//     Route::resource('descriptions', DescriptionController::class);
//     Route::resource('services', ServiceController::class);
//     Route::resource('layanan-internet', LayananInternetController::class);
// });

// Corrected syntax and added route name
Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/cctvlayanan', function () {
    return view('cctvlayanan');
})->name('cctvlayanan');

Route::get('/komputerlayanan', function () {
    return view('komputerlayanan');
})->name('komputerlayanan');

Route::get('/internetlayanan', function () {
    return view('internetlayanan');
})->name('internetlayanan');

Route::post('create-contact', [PengaduanController::class, "store"]);
// Route::resource('layanan-jarkom', [PengaduanController::class, "store"]);
