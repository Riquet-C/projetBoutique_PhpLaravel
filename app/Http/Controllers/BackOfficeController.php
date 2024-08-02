<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class BackOfficeController extends Controller
{
    public function backoffice(){
        $products = Product::all();
        return view('backoffice', ['product' => $products]);
    }
}
