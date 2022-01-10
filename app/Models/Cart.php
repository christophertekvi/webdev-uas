<?php

namespace App\Models;

use App\Http\Controllers\SignInController;
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
        $data = Session::get("cart", []);
        $check = false;
        foreach ($data as $d) {
            if ($d["menu"] -> ID_MENU == $menu -> ID_MENU) {
                $d["jumlah"] = $d["jumlah"] + $jumlah;
                $check = true;
            }
        }
        if (!$check) {
            $data[] = [
                "menu" => $menu,
                "jumlah" => $jumlah
            ];
        }
        Session::put("cart", $data);

        //coba insert database
        DB::table('keranjang')->insert([
            'ID_PEMBELI' => 'kayla@example.com',
            'ID_MENU' => $menu -> ID_MENU,
            'NAMA_MENU' => $menu -> NAMA_MENU,
            'FOTO_MENU' => null,
            'HARGA_MENU' => $menu -> HARGA_MENU,
            'QTY' => $jumlah,
            'TANGGAL_KIRIM' => null,
            'CENTANG' => 0
        ]);
    }

    public static function getAll()
    {
        return Session::get("cart", []);

    }

    // public static function keranjang($id)
    // {
    //     //coba panggil isi kranjang dri dtabase
    //     $cart = DB::table('keranjang')->where('ID_PEMBELI', $id);

    //     return Session::get("cart", []);

    // }

    public static function getCount()
    {
        return count(Cart::getAll());
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
