<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BackOfficeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'],);

/* routes produits */
Route::get('/product', [ProductController::class, 'product']);
Route::get('/productByName', [ProductController::class, 'productByName']);
Route::get('/productByPrice', [ProductController::class, 'productByPrice']);

Route::get('/product/{id}', [ProductController::class, 'productId']);

/* routes panier  */
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::post('/cart/add', [CartController::class, 'store'])->name('cart.store');;

/* Admin */
Route::get('/backoffice', [BackOfficeController::class, 'backOffice'])->name('backOffice');

/* route pour supprimer un article */

Route::get('/backoffice/{id}/delete', [BackOfficeController::class, 'delete'])->name('delete');

/* route pour ajouter un article */
Route::get('/backoffice/add', [BackOfficeController::class, 'addForm'])->name('addForm');
Route::post('/backoffice/addSucces', [BackOfficeController::class, 'add'])->name('add');

/* route pour modifier un article */
Route::get('/backoffice/{id}/modify', [BackOfficeController::class, 'modifyForm'])->name('modifyForm');
Route::post('/backoffice/{id}/modifySucces', [BackOfficeController::class, 'modify'])->name('modify');
