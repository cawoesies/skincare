<?php

use App\Http\Controllers\Api\ProdukController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Semua API produk tidak pakai auth dulu, agar mudah diakses di Postman
Route::get('/produk', [ProdukController::class, 'index']); 
//Route::get('/produk/{id}', [ProdukController::class, 'show']);
//Route::post('/produk', [ProdukController::class, 'store']);
//Route::put('/produk/{id}', [ProdukController::class, 'update']); 
//Route::delete('/produk/{id}', [ProdukController::class, 'destroy']);
//Route::get('/produk', [ProdukController::class, 'index']); 

Route::get('/produk', [ProdukController::class, 'index']); 
Route::post('/produk', [ProdukController::class, 'store']); 
Route::get('/produk/{id}', [ProdukController::class, 'show']); 
Route::put('/produk/{id}', [ProdukController::class, 'update']); 
Route::delete('/produk/{id}', [ProdukController::class, 'destroy']);