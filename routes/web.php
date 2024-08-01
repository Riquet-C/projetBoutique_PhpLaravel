<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'],);

/* routes produits */
Route::get('/product', [ProductController::class, 'product']);

Route::get('/product/{id}', [ProductController::class, 'productId']);

/* routes panier  */
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::post('/cart/add', [CartController::class, 'store'])->name('cart.store');;
