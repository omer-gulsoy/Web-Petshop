<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'surname' => 'required',
            'email'   => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        ContactForm::create($request->all());

        return back()->with('success', 'Mesajınız kaydedildi.');
    }
}