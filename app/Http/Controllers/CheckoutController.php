<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    public function index(){
        $id = session('idPembeli');
        $data = DB::table('keranjang')
                    ->select('id_menu', 'nama_menu', 'foto_menu', 'harga_menu', 'qty')
                    ->where('id_pembeli' ,$id)
                    ->get();

        return view('checkout',
            ["title" => "Checkout",
            "checkout" => $data,
            // "subtotal" => $data->harga_menu
        ]);
    }
}
