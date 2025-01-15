<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Rute untuk halaman utama
Route::get('/', function () {
    return view('pages.home'); // Pastikan Anda memiliki view ini
});

// Rute untuk menampilkan form kontak
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');

// Rute untuk menyimpan data kontak
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');