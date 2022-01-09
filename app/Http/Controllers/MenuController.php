<?php

namespace App\Http\Controllers;

use App\Models\Menu;
// use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    //

    public function list() {
        $menu = Menu::query()->paginate(8);

        return view("menuu", [
            "menu" => $menu
        ]);
    }

    public function detail($id){
        $menu = Menu::query()->findOrFail($id);

        return view("detailmenuu", [
            "m" => $menu
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
