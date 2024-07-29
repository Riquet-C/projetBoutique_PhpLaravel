<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product() : string {
        return "Liste des produits";
    }

    public function productId($id) : string {
        return "Fiche du produit $id";
    }
}
