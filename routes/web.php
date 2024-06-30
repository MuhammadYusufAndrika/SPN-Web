<?php

use App\Models\LayananCCTV;
use App\Models\About;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\CarouselController;
use App\Http\Controllers\Admin\DescriptionController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Admin\LayananCCTVController;
use App\Http\Controllers\Admin\LayananInternetController;
use App\Http\Controllers\Admin\LayananKomputerController;
use App\Models\Carousel;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\AboutController;

use App\Models\LayananInternet;
use App\Models\LayananKomputer;
use App\Models\Pengaduan;



Route::get('/', [IndexController::class, 'index']);

Route::prefix('admin')->name('admin.')->group(function () {
    // Rute untuk tampilan admin.blade.php
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    // Rute yang sudah ada
    Route::resource('carousels', CarouselController::class);
    Route::resource('descriptions', DescriptionController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('layanancctv', LayananCCTVController::class);
    Route::resource('layananinternet', LayananInternetController::class);
    Route::resource('layanankomputer', LayananKomputerController::class);
    Route::resource('contact', PengaduanController::class);
    Route::resource('about', AboutController::class);
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
    $sections = LayananCCTV::all();
    $carousels = Carousel::all();
    return view('cctvlayanan', compact('sections','carousels'));
})->name('cctvlayanan');


Route::get('/komputerlayanan', function () {
    $sections = LayananKomputer::all();
    $carousels = Carousel::all();
    return view('komputerlayanan', compact('sections','carousels'));
})->name('komputerlayanan');

Route::get('/internetlayanan', function () {
    $sections = LayananInternet::all();
    $carousels = Carousel::all();
    return view('internetlayanan', compact('sections','carousels'));
})->name('internetlayanan');

Route::post('create-contact', [PengaduanController::class, "store"]);
// Route::resource('layanan-jarkom', [PengaduanController::class, "store"]);
