<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)
                    ->where('password', $request->password) // KRİPTOSUZ kontrol
                    ->first();

        if ($user) {
            session(['user_id' => $user->id, 'role' => $user->role]);

            if ($user->role === 'admin') {
                return redirect('/admin/home');
            } else {
                return redirect('/customer/home');
            }
        } else {
            return back()->withErrors(['email' => 'Email veya şifre yanlış']);
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect('/login');
    }
}
