<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function index()
    {
        return view('sign-up');
    }


    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|max:255',
            'lastname' => 'max:255',
            'email' => 'required|email|unique:EMAIL_PEMBELI',
            'password' => 'required|min:8|max:255|confirmed',
            'reenter' => 'required|min:8'
        ]);

        dd('berhasil');
    }
}
