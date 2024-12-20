<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// Middleware untuk semua pengguna yang login
Route::middleware(['auth'])->group(function () {
    // Profil - dapat diakses oleh semua pengguna yang sudah login
    Route::get('/profil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profil', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profil', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Middleware untuk role alumni
Route::middleware(['auth', 'role:Alumni'])->group(function () {
    // Biodata - hanya dapat diakses oleh role alumni
    Route::get('/biodata', [BiodataController::class, 'show'])->name('alumni.biodata');
    Route::post('/biodata', [BiodataController::class, 'update'])->name('alumni.biodata.update');
});

// Middleware untuk role admin
Route::middleware(['auth', 'role:Admin'])->group(function () {
    // Pencarian data - hanya dapat diakses oleh role admin

    Route::get('/pencarian-data', function () {
        return view('admin.pencarian-data');
    })->name('pencarian-data');

    Route::get('/detail-data-alumni', function () {
        return view('admin.detail-data');
    })->name('detail-data');
    
    Route::get('/validasi', function () {
        return view('admin.validasi');
    })->name('antrian-validasi');
});

// Route lainnya yang tidak terbatas pada role tertentu
Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');

Route::get('/hasil-pencarian', function () {
    return view('guest.hasil-pencarian');
})->name('hasil-pencarian');

// Route Login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

require __DIR__ . '/auth.php';
