<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function product(){
        $order = Commande::all();
        return view('commande', ['order' => order]);
    }
}
