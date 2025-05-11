<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ProductController;

// Genel Sayfa Rotaları
Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\HomeController;

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

use App\Http\Controllers\ProductsController;

Route::get('/products', [ProductsController::class, 'index'])->name('products.index');


Route::get('/contact', function () {
    return view('contact');
});
use App\Http\Controllers\RegisterController;

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');

use App\Http\Controllers\CostumerController;

// Costumer ana sayfası
Route::get('/costumer/home', [CostumerController::class, 'index'])->name('costumer.home');

use App\Http\Controllers\LoginController;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.perform');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/admin/home', function () {
    return 'Admin Home';
});

Route::get('/customer/home', function () {
    return 'Customer Home';
});


// Admin Paneli Rotaları
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('home', [AdminController::class, 'index'])->name('home');
    Route::get('product', [AdminController::class, 'index2'])->name('product.index');
    Route::get('product/create', [AdminController::class, 'createProduct'])->name('product.create'); // Yeni ürün ekleme formu
    Route::post('product/store', [AdminController::class, 'storeProduct'])->name('product.store'); // Ürün kaydetme
    Route::get('product/edit/{id}', [AdminController::class, 'editProduct'])->name('product.edit'); // Ürün düzenleme formu
    Route::put('product/update/{id}', [AdminController::class, 'updateProduct'])->name('product.update'); // Ürün güncelleme
    Route::delete('product/delete/{id}', [AdminController::class, 'deleteProduct'])->name('product.delete'); // Ürün silme
    Route::get('services', [AdminController::class, 'index3'])->name('service.index');
    Route::get('form', [AdminController::class, 'index4'])->name('contactform.index');

    Route::get('service', [AdminController::class, 'index3'])->name('service.index'); // Listeleme
    Route::get('service/create', [AdminController::class, 'createService'])->name('service.create'); // Form
    Route::post('service/store', [AdminController::class, 'storeService'])->name('service.store'); // Kaydetme
    Route::get('service/edit/{id}', [AdminController::class, 'editService'])->name('service.edit');
});

// İletişim Formu Rotası
Route::post('/contact', [ContactFormController::class, 'store'])->name('contact.store');
