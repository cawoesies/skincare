<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProductController;

Route::get('/', [ViewController::class, 'landingPage'])->name('landing.page');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register'); 
Route::post('/register', [AuthController::class, 'register'])->name('register.process'); 
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login'); 
Route::post('/login', [AuthController::class, 'login'])->name('login.process'); 
Route::get('/home', [ViewController::class, 'home'])->name('home');
Route::get('/skincare', [ViewController::class, 'skincare'])->name('skincare');
Route::get('/produk', [ViewController::class, 'produk'])->name('produk');
Route::get('/produk/{id}', [ViewController::class, 'showProduct'])->name('produk.show');
Route::post('/pesan', [PesanController::class, 'store'])->name('pesan.store');
Route::get('/about-us', [ViewController::class, 'aboutUs'])->name('about.us');
Route::get('/ingredients', [ViewController::class, 'ingredients'])->name('ingredients');


Route::get('/admin', [AuthController::class, 'admin'])->name('admin');
Route::resource('products', ProductController::class);
// Menampilkan daftar semua pesanan
Route::get('/pesan', [PesanController::class, 'index'])->name('index');
Route::delete('/pesan/{id}', [PesanController::class, 'destroy'])->name('pesan.destroy');
