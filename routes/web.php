<?php

use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'],);

Route::get('/products', [ProductController::class, 'products']);


Route::get('/products/{id}', [ProductController::class, 'productsID']);

Route::get('/cart', [CartController::class, 'cart']);

Route::get('/product-listNom', [ProductController::class, 'productsNom']);

Route::get('/product-listPrix', [ProductController::class, 'productsPrix']);

Route::get('/backoffice', [BackofficeController::class, 'backoffice']);
