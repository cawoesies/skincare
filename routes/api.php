<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

Route::get('/products', [ProductController::class, 'index']); // Get semua produk
Route::post('/products', [ProductController::class, 'store']); // Tambah produk
Route::get('/products/{id}', [ProductController::class, 'show']); // Get detail produk
Route::put('/products/{id}', [ProductController::class, 'update']); // Update produk
Route::delete('/products/{id}', [ProductController::class, 'destroy']); // Hapus produk
