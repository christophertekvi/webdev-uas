<?php

namespace App\Models;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Cart
{
    public static function add($menu, $jumlah=1)
    {
        // if (!Session::has("cart"))
        // {
        //     Session::put("cart",[]);
        // }
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
        // Session::put("cart", $data);

        //coba insert database

    }

    public static function updateCart($menu, $jumlah)
    {
        $id = session('idPembeli');
        $data = DB::table('keranjang')->where('ID_PEMBELI', $id)->get();

        $data[] = [
            "menu" => $menu,
            "jumlah" => $jumlah
        ];
        if($jumlah != 0)
        {
            DB::table('keranjang')
            ->where([
                ['ID_PEMBELI', '=', $id],
                ['ID_MENU', '=', $menu -> ID_MENU]
                ])
            ->update(['QTY' => $jumlah]);
        }
        else
        {
            DB::table('keranjang')
            ->where([
                ['ID_PEMBELI', '=', $id],
                ['ID_MENU', '=', $menu -> ID_MENU]
                ])
            ->delete();
        }

    }

    public static function getAll()
    {
        return Session::get("cart", []);

    }



    public static function getCount()
    {
        $id = session('idPembeli');
        $data = DB::table('keranjang')->where('ID_PEMBELI', $id)->get();
        //dd(count($data));
        return count($data);
        //return count(Cart::getAll());
    }



    // private static $cart_menu = [
    //     "title" => "Ini Judul",
    //     "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem doloribus saepe nesciunt sit officiis! Rerum illum quibusdam unde dicta ut placeat molestias nemo consectetur explicabo maiores vel porro asperiores iusto, voluptatem illo deserunt harum. Neque nulla quam pariatur et suscipit quia perspiciatis temporibus delectus consequuntur rerum aliquid ut ea labore minus officia nostrum, voluptate veritatis id explicabo? Neque iste, ipsam quia et porro nisi voluptate non deserunt pariatur nostrum voluptates rem, minus quae cupiditate vero quibusdam dolorum quaerat repellendus velit nulla ut veritatis blanditiis sapiente? Corporis inventore excepturi vitae maxime sapiente iste beatae qui minima. Omnis porro impedit quaerat quibusdam."
    // ];

    // public static function all()
    // {
    //     return self::$cart_menu;
    // }
}
