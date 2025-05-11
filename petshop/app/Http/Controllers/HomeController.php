<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 1)->get(); // aktif ürünleri al
        return view('home', compact('products'));
    }
}
