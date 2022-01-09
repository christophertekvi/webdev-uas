<?php

namespace App\Http\Controllers;

use App\Models\Menu;
// use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    //

    public function list() {
        //ini adalah builder model pagination
        // $items = Item::query()->paginate(10);

        // $menu = DB::table("menu m, jadwal j, jadwal_catering jc")
        //     ->select("m.id_menu", "nama_menu", "harga_menu")
        //     ->where("m.id_menu", "=", "jc.id_menu")
        //     ->where("j.id_jadwal", "=", "jc.id_jadwal")
        //     ->get();

        // $menu = DB::select('select m.id_menu, nama_menu,harga_menu from menu m, jadwal j, jadwal_catering jc where m.id_menu = jc.id_menu and j.id_jadwal = jc.id_jadwal');

        $menu = Menu::query()->paginate(10);

        return view("menu-sign-in", [
            "menu" => $menu,
            "title" => "Menu"
        ]);
    }

    public function lists() {
        //ini adalah builder model pagination
        // $items = Item::query()->paginate(10);

        // $menu = DB::table("menu m, jadwal j, jadwal_catering jc")
        //     ->select("m.id_menu", "nama_menu", "harga_menu")
        //     ->where("m.id_menu", "=", "jc.id_menu")
        //     ->where("j.id_jadwal", "=", "jc.id_jadwal")
        //     ->get();

        // $menu = DB::select('select m.id_menu, nama_menu,harga_menu from menu m, jadwal j, jadwal_catering jc where m.id_menu = jc.id_menu and j.id_jadwal = jc.id_jadwal');

        $menu = Menu::query()->paginate(10);

        return view("menu", [
            "menu" => $menu,
            "title" => "Menu"
        ]);
    }

    public function detail($id){
        $menu = Menu::query()->findOrFail($id);

        return view("detailmenu", [
            "nama" => $menu -> NAMA_ITEM,
            "m" => $menu,
            "title" => "Detail Menu"
        ]);
    }

    public function details($id){
        $menu = Menu::query()->findOrFail($id);

        return view("detailmenu", [
            "nama" => $menu -> NAMA_ITEM,
            "m" => $menu,
            "title" => "Detail Menu"
        ]);
    }
    // public function addSingleCart(Request $request) {
    //     $id = $request->input("btnAddCart");
    //     $item = Item::query()->findOrFail($id);
    //     Cart::add($item);
    //     return redirect()->back()
    //         ->with("success", "Berhasil menambah cart ".$item->ITEM_NAME);
    // }

    // public function addDetailCart(Request $request, $id) {
    //     $request->validate([
    //         "inputQuantity" => "numeric"
    //     ]);
    //     $item = Item::query()->findOrFail($id);

    // }
}
