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
        // $validatedData = $request->validate([
        $request->validate([
            'firstname' => 'required|max:255',
            'lastname' => 'max:255',
            'email' => 'required|email:dns|unique:pembeli,EMAIL',
            'password' => 'required|min:8|max:255|confirmed',
            'reenter' => 'required|same:password'
        ]);

        $dataArray = array(
            "firstname" => $request->name,
            "lastname" => $request->lastname,
            "email" => $request->email,
            "password" => $request->password
        );

        $user = User::create($dataArray);
        if(!is_null($user)){
            return back()->with("success", "Sign Up Successful!");
        }
        else{
            return back()->with("failed", "Sign Up Failed");
        }

        //buat encrypt password -----
        // $validatedData['password'] = bcrypt($validatedData['password']);

        // dd('berhasil');

        //insert user -------
        // User::create($validatedData);

        //redirect --------
        // return redirect('/home-sign-in');
    }
}
