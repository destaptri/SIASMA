<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profil', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profil', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/biodata', function () {
        return view('biodata.biodata');
    })->name('biodata');
});

Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');

Route::get('/detail-data-alumni', function () {
    return view('admin.detail-data');
})->name('detail-data');

Route::get('/hasil-pencarian', function () {
    return view('guest.hasil-pencarian');
})->name('hasil-pencarian');

Route::get('/pencarian-data', function () {
    return view('admin.pencarian-data');
})->name('pencarian-data');

Route::get('/validasi', function () {
    return view('admin.validasi');
})->name('antrian-validasi');


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

require __DIR__.'/auth.php';
