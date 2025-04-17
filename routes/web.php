<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

Route::get('/', [ViewController::class, 'home'])->name('home'); // Home
Route::get('/skincare/skincare', [ViewController::class, 'skincare'])->name('skincare'); // Produk skincare
Route::get('/skincare/aboutUs', [ViewController::class, 'aboutUs'])->name('about.us'); // Tentang Kami
Route::get('/skincare/ingredients', [ViewController::class, 'ingredients'])->name('ingredients'); // Kandungan Skincare
