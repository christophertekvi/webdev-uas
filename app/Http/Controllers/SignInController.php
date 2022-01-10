<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);
        $email = $request->email;
        $password = $request->password;
        $userdata = DB::table('pembeli')->where('EMAIL', $email)->first();
        if (is_null($userdata)) {
            return back()->with('LoginError', 'Sign In Failed');
        } else {
            $obj = get_object_vars($userdata);
            if ($userdata) {
                if ($password == $obj['PASSWORD']) {
                    $request->session()->put('email', $request->email);
                    $request->session()->put('poin', $obj['POIN']);
                    $request->session()->put('noHP', $obj['NO_HP']);
                    $request->session()->put('alamat', $obj['ALAMAT']);
                    $request->session()->put('gender', $obj['JENIS_KELAMIN']);
                    $request->session()->put('firstname', $obj['FIRST_NAME']);
                    $request->session()->put('lastname', $obj['LAST_NAME']);
                    $request->session()->put('foto', $obj['FOTO_PEMBELI']);

                    $idPembeli = $obj['ID_PEMBELI'];
                    $fav = DB::table('menu_favorit')->where('ID_PEMBELI', $idPembeli)->first();
                    $obj = get_object_vars($fav);
                    $request->session()->put('fav', $obj['ID_MENU']);

                    $orders = DB::table('transaksi_beli')->where('ID_PEMBELI', $idPembeli)->first();
                    $obj = get_object_vars($orders);
                    $request->session()->put('orders', $obj['ID_TB']);

                    $idPembeli = $obj['ID_PEMBELI'];

                    $fav = DB::table('menu_favorit')->where('ID_PEMBELI', $idPembeli)->first();
                    if (!is_null($fav)) {
                        $obj = get_object_vars($fav);
                        $request->session()->put('fav', $obj['ID_MENU']);
                    } else {
                    }
                    $orders = DB::table('transaksi_beli')->where('ID_PEMBELI', $idPembeli)->first();
                    if (!is_null($orders)) {
                        $obj = get_object_vars($orders);
                        $request->session()->put('orders', $obj['ID_TB']);
                    } else {
                    }
                    return view('home-sign-in', ['title' => 'home']);
                } else {
                    return back()->with('LoginError', 'Sign In Failed');
                }
            } else {
                return back()->with('LoginError', 'Sign In Failed');
            }
        }
    }
}
