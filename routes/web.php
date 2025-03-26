<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function(){
    $title = "Homepage";
   
    return view('web.homepage',['title'=>$title]);
   });
   Route::get('products', function(){
    $title = "Products";
    return view('web.products',['title'=>$title]);
   });
   Route::get('product/{slug}', function($slug){
    $title = "Single Product";
    return view('web.single_product',['title'=>$title,'slug'=>$slug]);
   });
   Route::get('categories', function(){
    $title = "Categories";
    return view('web.categories',['title'=>$title]);
   });
   Route::get('category/{slug}', function($slug){
    $title = "Single Category";
    return view('web.single_category',['title'=>$title,'slug'=>$slug]);
   });
   Route::get('cart', function(){
    $title = "Cart";
    return view('web.cart',['title'=>$title]);
   });
   Route::get('checkout', function(){
    $title = "Checkout";
    return view('web.checkout',['title'=>$title]);
   });


// // Halaman Utama
// Route::get('/', function () {
//     return 'halaman home page';
// });

// // Produk
// Route::get('/produk', function () {
//     return ('ini halaman produk');
// });

// Route::get('/produk/{slug}', function ($slug) {
//     return 'halaman single produk -'.$slug;
// });

// // Keranjang
// Route::get('/Cart', function () {
//     return ('Keranjang belanja pengguna');
// });
// // Keranjang
// Route::get('/Cart', function () {
//     return ('Keranjang belanja pengguna');
// });
// // Keranjang
// Route::get('/Cart', function () {
//     return ('Keranjang belanja pengguna');
// });

// //Checkout & pembayaran
// Route::get('/Checkout', function () {
//     return ('Halaman Checkout dan pembayaran');
// });

// //pesanan
// Route::get('/Pesanan', function () {
//     return ('Dhasbord pesanan pengguna');
// });

// // Admin 
// Route::get('/admin/dashboard', function () {
//     return ('Dashboard admin');
// });
// Route::get('/admin/products', function () {
//     return ('Kelola produk oleh admin');
// });
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
