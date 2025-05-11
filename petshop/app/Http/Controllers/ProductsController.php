<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 1)->get(); // aktif ürünleri çekiyoruz
        return view('products', compact('products'));
    }
}
