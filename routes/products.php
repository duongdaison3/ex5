<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/create', function () {
    return view('create');
})->name('products.create');

Route::post('/products/create', [ProductController::class, 'createProduct']);

Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

Route::get('/products/{id}/edit', [ProductController::class, 'editProduct'])->name('products.edit');
Route::put('/products/update', [ProductController::class, 'updateProduct']);