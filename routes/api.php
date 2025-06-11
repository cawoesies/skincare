<?php

use App\Http\Controllers\Api\ApiProdukController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

//Semua API resep tidak pakai auth dulu, agar mudah diakses di Postman
Route::get('/products', [ProdukController::class, 'index']); 
//Route::get('/products/{id}', [ProductController::class, 'show']);
//Route::post('/product', [ProductController::class, 'store']);
//Route::put('/products/{id}', [ProductController::class, 'update']); 
//Route::delete('/products/{id}', [ProductController::class, 'destroy']);
//Route::get('/products', [ProductController::class, 'index']);