<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/internetlayanan', function () {
    return view('internetlayanan');
})->name('internetlayanan');

