<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SignUpController extends Controller
{
    public function index()
    {
        return view('sign-up');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required|max:255',
            'lastname' => 'max:255',
            'email' => 'required|email:dns|unique:EMAIL',
            'password' => 'required|min:8|max:255|confirmed',
            'reenter' => 'required|min:8'
        ]);

        //buat encrypt password -----
        // $validatedData['password'] = bcrypt($validatedData['password']);

        dd('berhasil');

        //insert user -------
        // User::create($validatedData);

        //redirect --------
        // return redirect('/home-sign-in');
    }
}
