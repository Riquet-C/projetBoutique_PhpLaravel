<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BackOfficeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'],)->name('home');

/* routes produits */
Route::get('/products', [ProductController::class, 'product']);
Route::get('/productByName', [ProductController::class, 'productByName']);
Route::get('/productByPrice', [ProductController::class, 'productByPrice']);
Route::get('/productByCategories', [ProductController::class, 'productByCategories']);

Route::get('/products/{id}', [ProductController::class, 'productId']);

/* routes panier  */
Route::get('/cart', [CartController::class, 'show'])->name('cart');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');;
Route::get('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::put('/cart/update/{id}', [CartController::class, 'updateCart'])->name('cart.update');

/* Admin */
Route::get('/backoffice', [BackOfficeController::class, 'backOffice'])->name('backOffice');

/* route pour supprimer un article */

Route::delete('/backoffice/{id}/delete', [BackOfficeController::class, 'delete'])->name('delete');

/* route pour ajouter un article */
Route::get('/backoffice/add', [BackOfficeController::class, 'addForm'])->name('addForm');
Route::post('/backoffice/addSucces', [BackOfficeController::class, 'add'])->name('add');

/* route pour modifier un article */
Route::get('/backoffice/{id}/modify', [BackOfficeController::class, 'modifyForm'])->name('modifyForm');
Route::put('/backoffice/{id}/modifySucces', [BackOfficeController::class, 'modify'])->name('modify');


/* route pour commander */
Route::get('/order', [OrdersController::class, 'createOrder'])->name('order');
