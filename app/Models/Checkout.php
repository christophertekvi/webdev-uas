<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Checkout extends Model
{
    public static function add($menu, $jumlah=1)
    {
        $id = session('idPembeli');
        $data = DB::table('keranjang')->where('ID_PEMBELI', $id)->get();
        //dd($data);
        $check = false;
        foreach ($data as $d) {
            if ($d -> id_menu == $menu -> ID_MENU) {
                $d -> qty = $d -> qty + $jumlah;
                $check = true;
            }
        }
        if (!$check) {
            $data[] = [
                "menu" => $menu,
                "jumlah" => $jumlah
            ];
            DB::table('keranjang')->insert([
                'ID_PEMBELI' => $id,
                'ID_MENU' => $menu -> ID_MENU,
                'NAMA_MENU' => $menu -> NAMA_MENU,
                'FOTO_MENU' => $menu -> FOTO_MENU,
                'HARGA_MENU' => $menu -> HARGA_MENU,
                'QTY' => $jumlah,
                'TANGGAL_KIRIM' => null,
                'CENTANG' => null
            ]);
        }
        else {
            $data[] = [
                "menu" => $menu,
                "jumlah" => $jumlah
            ];
            DB::table('keranjang')
            ->where([
                ['ID_PEMBELI', '=', $id],
                ['ID_MENU', '=', $menu -> ID_MENU]
                ])
            ->update(['QTY' => $d -> qty]);

        }
        return view('checkout', ['checkout' => $data]);

    }

    public static function getAll()
    {
        return Session::get("checkout", []);
    }
}
