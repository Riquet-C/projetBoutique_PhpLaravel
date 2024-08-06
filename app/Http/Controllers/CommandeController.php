<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Orders;

class CommandeController extends Controller
{
    public function commande(){
        $order = Commande::all();
        return view('commande', ['order' => order]);
    }
}
