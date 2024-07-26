<?php

use App\Models\LayananCCTV;
use App\Models\About;
use App\Models\Description;
use App\Models\Service;
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
use App\Http\Controllers\AuthController;
use App\Models\LayananInternet;
use App\Models\LayananKomputer;
use App\Http\Controllers\ProfileController;
use App\Models\Pengaduan;

// Route::middleware(['auth'])->group(function () {
//     Route::get('/profile', function () {
//         return view('profile');
//     })->name('profile');

//     Route::prefix('admin')->middleware('auth')->group(function () {
//         Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
//         // Rute admin lainnya
//     });
// });


Route::get('/', [IndexController::class, 'index'])->name('home');
//autentikasi
// Route::get('/', function () {
//     return view('welcome');
// })->middleware('auth');

// Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');

// Register
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'store'])->name('auth.store');

// Logout
Route::post('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');


Route::get('/', [IndexController::class, 'index']);
Route::get("/index", function () {
    $firstDescription = Description::first();
    $carousels = Carousel::all();
    $services = Service::all();
    return view('index', compact('firstDescription', 'carousels', 'services'));
});

// Route admin
Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        // Rute untuk tampilan admin.blade.php
        Route::get('/', [AdminController::class, 'index'])->name('dashboard');
        // Rute yang sudah ada
        Route::resource('carousels', CarouselController::class);
        Route::resource('about', AboutController::class);
        Route::resource('contact', PengaduanController::class);
        Route::resource('descriptions', DescriptionController::class);
        Route::resource('services', ServiceController::class);
        Route::resource('layanancctv', LayananCCTVController::class);
        Route::resource('layananinternet', LayananInternetController::class);
        Route::resource('layanankomputer', LayananKomputerController::class);
    });
});

Route::resource('about', AboutController::class)->names([
    'index' => 'admin.about.index',
    'create' => 'admin.about.create',
    'store' => 'admin.about.store',
    'show' => 'admin.about.show',
    'edit' => 'admin.about.edit',
    'update' => 'admin.about.update',
    'destroy' => 'admin.about.destroy',
]);


Route::middleware(['auth'])->group(function () {
    // Halaman utama untuk pengguna biasa
    Route::get('/', [IndexController::class, 'index'])->name('home');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
});



Route::get('/profile', [ProfileController::class, 'showProfileForm'])->name('profile')->middleware('auth');
Route::post('/update-profil', [ProfileController::class, 'updateProfil'])->name('update-profil')->middleware('auth');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/cctvlayanan', function () {
    $sections = LayananCCTV::all();
    $carousels = Carousel::all();
    return view('cctvlayanan', compact('sections', 'carousels'));
})->name('cctvlayanan');

Route::get('/about', function () {
    $abouts = About::all();
    $carousels = Carousel::all();
    return view('about', compact('abouts', 'carousels'));
})->name('about');


Route::get('/komputerlayanan', function () {
    $sections = LayananKomputer::all();
    $carousels = Carousel::all();
    return view('komputerlayanan', compact('sections', 'carousels'));
})->name('komputerlayanan');

Route::get('/internetlayanan', function () {
    $sections = LayananInternet::all();
    $carousels = Carousel::all();
    return view('internetlayanan', compact('sections', 'carousels'));
})->name('internetlayanan');

Route::post('create-contact', [PengaduanController::class, "store"]);
// Route::resource('layanan-jarkom', [PengaduanController::class, "store"]);