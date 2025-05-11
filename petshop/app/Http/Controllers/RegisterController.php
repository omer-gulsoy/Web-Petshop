<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // User modelini dahil et

class RegisterController extends Controller
{
    // Kaydolma sayfasını göster
    public function index()
    {
        return view('register'); // resources/views/register.blade.php dosyasını döndürür
    }

    // Kullanıcı kaydı
    public function register(Request $request)
    {
        // Doğrulama işlemi
        $validated = $request->validate([
            'name' => 'required|string|max:255', // İsim zorunlu ve string olmalı
            'email' => 'required|email|max:255|unique:users,email', // E-posta zorunlu, unique olmalı
            'password' => 'required|string|min:8', // Şifre zorunlu ve minimum 8 karakter
        ]);

        // Yeni kullanıcıyı oluştur (şifreyi hashlemeden)
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password, // Şifreyi düz olarak kaydediyoruz
        ]);

        // Başarıyla kaydoldularsa login sayfasına yönlendir
        return redirect()->route('login'); // login route'una yönlendir
    }
}
