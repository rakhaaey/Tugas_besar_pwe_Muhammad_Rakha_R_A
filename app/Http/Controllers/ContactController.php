<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Metode untuk menampilkan form kontak
    public function create()
    {
        return view('contact.create'); // Pastikan Anda memiliki view ini
    }

    // Metode untuk menyimpan data kontak
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($request->all());

        return redirect()->back()->with('success', 'Pesan Anda telah dikirim!');
    }
}