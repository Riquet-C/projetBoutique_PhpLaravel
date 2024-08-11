<?php

namespace App\View\Components;

use Closure;
use App\Models\Cart;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public int $total;
    public string $title = "PetShop";

    public function __construct()
    {
        $cart = Cart::with('products')->where('user_id', '=', 1)->first();
        $this->total = $cart->calculateQuantity();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
