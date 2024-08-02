<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BackOfficeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'],);

Route::get('/product', [ProductController::class, 'product']);

Route::get('/productbyname', [ProductController::class, 'productNameSort']);

Route::get('/productbyprice', [ProductController::class, 'productPriceSort']);

Route::get('/product/{id}', [ProductController::class, 'productId']);

Route::get('/cart', [CartController::class, 'cart']);

Route::get('/backoffice', [BackOfficeController::class, 'backoffice']);

