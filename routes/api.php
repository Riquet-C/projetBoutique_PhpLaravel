<?php

use App\Http\Controllers\API\ProductController;


Route::get('products', [ProductController::class, 'index']);
Route::get('products/{id}', [ProductController::class, 'product']);
Route::post('products/add', [ProductController::class, 'store']);
Route::put('products/update/{id}', [ProductController::class, 'update']);
Route::delete('products/delete/{id}', [ProductController::class, 'destroy']);
