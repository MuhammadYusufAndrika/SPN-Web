<?php

use App\Models\LayananCCTV;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\CarouselController;
use App\Http\Controllers\Admin\DescriptionController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Admin\LayananCCTVController;
use App\Http\Controllers\Admin\LayananInternetController;
use App\Http\Controllers\Admin\LayananKomputerController;
use App\Http\Controllers\PengaduanController;

use App\Models\LayananInternet;
use App\Models\LayananKomputer;
use App\Models\Pengaduan;

Route::get('/', [IndexController::class, 'index'])->name('index');

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
});

// Mengatur route untuk URL '/profile'
Route::get('/profile', function () {
    // Mengembalikan view bernama 'profile'
    return view('profile');
})->name('profile');

// Mengatur route untuk URL '/contact'
Route::get('/contact', function () {
    return view('contact');
})->name('contact');


// Mengatur route untuk URL '/cctvlayanan'
Route::get('/cctvlayanan', function () {
    // ambil semua data dari model LayananCCTV simpan ke variabel $sections
    $sections = LayananCCTV::all();
    return view('cctvlayanan', compact('sections'));
})->name('cctvlayanan');

// Mengatur route untuk URL '/komputerlayanan'
Route::get('/komputerlayanan', function () {
    $sections = LayananKomputer::all();
    return view('komputerlayanan', compact('sections'));
})->name('komputerlayanan');

// Mengatur route untuk URL '/internetlayanan'
Route::get('/internetlayanan', function () {
    $sections = LayananInternet::all();
    return view('internetlayanan', compact('sections'));
})->name('internetlayanan');

Route::post('create-contact', [PengaduanController::class, "store"]);