<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product() : string {
        $date = ['message' => 'produits'];
        return view('product-list', $date);
    }

    public function productId($id) : string {
        $date = ['message' => 'produit n°' . $id];
        return view('product-details', $date);
    }
}
