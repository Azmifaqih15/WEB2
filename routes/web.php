<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

// Halaman Utama
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Produk
Route::get('/produk', function () {
    return ('ini halaman produk');
});

Route::get('/produk/:id', function () {
    return ('Detail produk dengan ID ');
});

// Keranjang
Route::get('/Cart', function () {
    return ('Keranjang belanja pengguna');
});

//Checkout & pembayaran
Route::get('/Checkout', function () {
    return ('Halaman Checkout dan pembayaran');
});

//pesanan
Route::get('/Pesanan', function () {
    return ('Dhasbord pesanan pengguna');
});

// Admin 
Route::get('/admin/dashboard', function () {
    return ('Dashboard admin');
});
Route::get('/admin/products', function () {
    return ('Kelola produk oleh admin');
});
// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::middleware(['auth'])->group(function () {
//     Route::redirect('settings', 'settings/profile');

//     Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
//     Volt::route('settings/password', 'settings.password')->name('settings.password');
//     Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
// });

require __DIR__.'/auth.php';
