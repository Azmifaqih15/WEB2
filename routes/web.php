<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

// ✅ Halaman Utama
Route::get('/', [HomeController::class, 'index'])->name('home');

// ✅ Produk
Route::get('/products', [ProductController::class, 'index'])->name('products.index'); // Semua produk
Route::get('/product/{slug}', [ProductController::class, 'show'])->name('products.show'); // Detail produk
Route::get('/search', [ProductController::class, 'search'])->name('products.search'); // Pencarian produk


// ✅ Keranjang Belanja
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

// ✅ Checkout & Pembayaran
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index')->middleware('auth');
Route::post('/checkout/process', [CheckoutController::class, 'process'])->name('checkout.process');
Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');

// ✅ Pesanan
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index')->middleware('auth');
Route::get('/order/{id}', [OrderController::class, 'show'])->name('orders.show')->middleware('auth');

// ✅ Autentikasi Pengguna
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ✅ Dashboard Admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/products', [AdminController::class, 'products'])->name('admin.products');
    Route::get('/admin/orders', [AdminController::class, 'orders'])->name('admin.orders');
});

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

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
