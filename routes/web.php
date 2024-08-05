<?php

use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'],);

// route produits
Route::get('/products', [ProductController::class, 'products']);

Route::get('/product-listNom', [ProductController::class, 'productsNom']);

Route::get('/product-listPrix', [ProductController::class, 'productsPrix']);

Route::get('/products/{id}', [ProductController::class, 'productsID']);

//route panier
Route::get('/cart', [CartController::class, 'cart'])->name('cart');

//route::post('/cart/ajouter', [CartController::class, 'ajouterPanier'])->name('ajouterPanier');

//route backoffice
Route::get('/backoffice', [BackofficeController::class, 'backoffice']);

Route::get('/backoffice/{id}/pagemodif', [BackofficeController::class, 'pagemodif'])->name('pagemodif');

Route::post('/backoffice/{id}/modifier', [BackofficeController::class, 'modifier']) ->name('modifier');

Route::get('/backoffice/ajouter', [BackofficeController::class, 'ajouter']) ->name('ajouter');

Route::post('/backoffice/valider', [BackofficeController::class, 'valider']) ->name('valider');

Route::get('/backoffice/{id}/supprimer', [BackofficeController::class, 'delete'])->name('delete');
