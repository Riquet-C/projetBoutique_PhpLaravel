<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data = ['message' => 'Home page'];
        return view('Homepage', $data);
    }
}
