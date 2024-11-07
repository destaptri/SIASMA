<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('index');
})->name('beranda');
Route::get('/login-alumni', function () {
    return view('auth.login-alumni');
})->name('login-alumni');

Route::get('/login-admin', function () {
    return view('auth.login-admin');
})->name('login-admin');

Route::get('/hasil-pencarian', function () {
    return view('guest.hasil-pencarian');
})->name('hasil-pencarian');

Route::get('/data-alumni', function () {
    return view('alumni.biodata');
})->name('biodata');
