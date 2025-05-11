<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin_home');
    }

    public function index2()
    {
        // Ürünleri al
        $products = Product::all();

        // Admin sayfasına ürünleri gönderiyoruz
        return view('admin_product', compact('products'));
    }

    // Ürün oluşturma (Create)
    public function createProduct()
    {
        return view('admin_create_product'); // Yeni ürün ekleme formu
    }

    public function storeProduct(Request $request)
    {
        // Formdan gelen veriyi doğrulama
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'status' => 'required|boolean',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        } else {
            $imagePath = null;
        }
        // Yeni ürün ekleme
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'status' => $request->status,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.product.index')->with('success', 'Ürün başarıyla eklendi!');
    }

    // Ürün güncelleme (Update)
    public function editProduct($id)
    {
        $product = Product::findOrFail($id);
        return view('admin_edit_product', compact('product')); // Ürün düzenleme formu
    }

    public function updateProduct(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'status' => 'required|boolean',
        ]);


        $product = Product::findOrFail($id); // <-- önce tanımla

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = $imagePath;
        }

        $product = Product::findOrFail($id);
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'status' => $request->status,
            'image' => $product->image, // güncel veya eski
        ]);

        return redirect()->route('admin.product.index')->with('success', 'Ürün başarıyla güncellendi!');
    }

    // Ürün silme (Delete)
    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.product.index')->with('success', 'Ürün başarıyla silindi!');
    }

    public function index4()
    {
        $contactForms = ContactForm::all();
        return view('admin_form', compact('contactForms'));
    }
}
