<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProdukController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PesananController;

// ---------------- ROUTE PRODUK ----------------
Route::prefix('produk')->group(function () {
    Route::get('/', [ProdukController::class, 'index']);
    Route::get('/{id}', [ProdukController::class, 'show']);
    Route::post('/', [ProdukController::class, 'store']);
    Route::put('/{id}', [ProdukController::class, 'update']);
    Route::delete('/{id}', [ProdukController::class, 'destroy']);
});

// ---------------- ROUTE USER ----------------
Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::post('/', [UserController::class, 'store']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
});

// ---------------- ROUTE PESANAN ----------------
Route::prefix('pesanan')->group(function () {
    Route::get('/', [PesananController::class, 'index']);
    Route::get('/{id}', [PesananController::class, 'show']);
    Route::post('/', [PesananController::class, 'store']);
    Route::put('/{id}', [PesananController::class, 'update']);
    Route::delete('/{id}', [PesananController::class, 'destroy']);
});