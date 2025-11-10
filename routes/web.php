<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

// Home
Route::get('/', function () {
    return view('welcome'); // view default: welcome.blade.php
});

// Home1
Route::get('/home1', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Kelvin Febrianto']);
});

// Tampilkan form
Route::get('/mahasiswa', function () {
    return view('form');
});

// Tangani form POST
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);

// Tampilkan tabel mahasiswa
Route::get('/mahasiswatable', [MahasiswaController::class, 'index']);
