<?php

namespace App\Models;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuFav
{
    public static function add($menu)
    {
        // if (!Session::has("cart"))
        // {
        //     Session::put("cart",[]);
        // }
        $id = session('idPembeli');
        $data = DB::table('menu_favorit')->where('ID_PEMBELI', $id)->get();
        //dd($data);
        $check = false;
        foreach ($data as $d) {
            if ($d -> ID_MENU == $menu -> ID_MENU) {
                $check = true;
            }
        }
        if (!$check) {
            $data[] = [
                "menu" => $menu
            ];
            DB::table('menu_favorit')->insert([
                'ID_PEMBELI' => $id,
                'ID_MENU' => $menu -> ID_MENU,
                'delete' => '0'
            ]);
        }
        else {
            DB::table('menu_favorit')
            ->where([
                ['ID_PEMBELI', '=', $id],
                ['ID_MENU', '=', $menu -> ID_MENU]
                ])
            ->delete();

        }
        // Session::put("cart", $data);

        //coba insert database

    }
}
