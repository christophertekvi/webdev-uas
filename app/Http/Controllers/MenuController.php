<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Cart;
use App\Models\MenuFav;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    //

    public function lists()
    {
        //ini adalah builder model pagination
        // $items = Item::query()->paginate(10);

        // $menu = DB::table("menu m, jadwal j, jadwal_catering jc")
        //     ->select("m.id_menu", "nama_menu", "harga_menu")
        //     ->where("m.id_menu", "=", "jc.id_menu")
        //     ->where("j.id_jadwal", "=", "jc.id_jadwal")
        //     ->get();

        // $menu = DB::select('select m.id_menu, nama_menu,harga_menu from menu m, jadwal j, jadwal_catering jc where m.id_menu = jc.id_menu and j.id_jadwal = jc.id_jadwal');

        $menu = DB::table('menu')->where('MENU_DELETE', 0)->paginate(10);
        //Menu::query()->where('MENU_DELETE' != '0')->paginate(10);

        return view("menu-sign-in", [
            "menu" => $menu,
            "title" => "Menu"
        ]);
    }

    public function list()
    {
        //ini adalah builder model pagination
        // $items = Item::query()->paginate(10);

        // $menu = DB::table("menu m, jadwal j, jadwal_catering jc")
        //     ->select("m.id_menu", "nama_menu", "harga_menu")
        //     ->where("m.id_menu", "=", "jc.id_menu")
        //     ->where("j.id_jadwal", "=", "jc.id_jadwal")
        //     ->get();

        // $menu = DB::select('select m.id_menu, nama_menu,harga_menu from menu m, jadwal j, jadwal_catering jc where m.id_menu = jc.id_menu and j.id_jadwal = jc.id_jadwal');

        $menu = DB::table('menu')->where('MENU_DELETE', 0)->paginate(10);

        return view("menu", [
            "menu" => $menu,
            "title" => "Menu"
        ]);
    }

    public function detail($id)
    {
        $menu = DB::table('menu')->where('MENU_DELETE', 0)->findOrFail($id);

        return view("detailmenu", [
            "nama" => $menu->NAMA_ITEM,
            "m" => $menu,
            "title" => "Detail Menu"
        ]);
    }

    public function details($id)
    {
        $menu = Menu::query()->findOrFail($id);

        return view("detailmenu-sign-in", [
            "nama" => $menu->NAMA_MENU,
            "m" => $menu,
            "title" => "Detail Menu"
        ]);
    }

    // public function postMenu(Request $request) {
    //     if (Input::get('btnAddCart'))
    //     {
    //         $id = $request->input("btnAddCart");

    //         $menu = Menu::query()->findOrFail($id);
    //         Cart::add($menu);
    //         return redirect()->back()
    //             ->with("success", "Added to cart successfully ".$menu->NAMA_MENU);
    //     }
    // }

    public function addSingleCart(Request $request)
    {
        $id = $request->input("btnAddCart");

        $menu = Menu::query()->findOrFail($id);
        Cart::add($menu);
        return redirect()->back()
            ->with("success", "Added to cart successfully " . $menu->NAMA_MENU);
    }

    public function updateQty(Request $request)
    {
        $id = $request->input("btnUpdate");
        $request->validate([
            "inputQuantity" => "numeric"
        ]);
        $menu = Menu::query()->findOrFail($id);
        Cart::updateCart($menu, $request->input("inputQuantity"));
        return redirect()->back()
            ->with("success", "Quantity Updated " . $menu->NAMA_MENU);
    }

    public function addDetailCart(Request $request, $id)
    {
        $request->validate([
            "inputQuantity" => "numeric"
        ]);
        $menu = Menu::query()->findOrFail($id);
        Cart::add($menu, $request->input("inputQuantity"));
        return redirect()->back()
            ->with("success", "Added to cart successfully " . $menu->NAMA_MENU);
    }

    public function showCart()
    {
        // $cart = Cart::getAll();
        //pake database
        //  Cart::keranjang();
        $id = session('idPembeli');
        $cart = DB::table('keranjang')->where('ID_PEMBELI', $id)->get();
        // $total = DB::table('keranjang')->where('ID_PEMBELI', $id)->sum(DB::raw('harga_menu'*'qty'));
        $total = DB::table('keranjang')->select(DB::raw('sum(harga_menu*qty) as total'))->where('ID_PEMBELI', $id)->get();
        //dd($total);
        return view("cart", [
            "cart" => $cart,
            "total" => $total,
            "title" => "Cart"
        ]);
    }

    public function addFav(Request $request)
    {
        $id = $request->input("AddFav");

        $menu = Menu::query()->findOrFail($id);
        //MenuFav::add($menu);
        //return redirect()->back()
        //->with("success", "Added to Favourite ".$menu->NAMA_MENU);

        $idP = session('idPembeli');
        $data = DB::table('menu_favorit')->where('ID_PEMBELI', $idP)->get();
        //dd($data);
        $check = false;
        foreach ($data as $d) {
            if ($d->ID_MENU == $menu->ID_MENU) {
                $check = true;
            }
        }
        if (!$check) {
            $data[] = [
                "menu" => $menu
            ];
            DB::table('menu_favorit')->insert([
                'ID_PEMBELI' => $idP,
                'ID_MENU' => $menu->ID_MENU,
                'FOTO_MENU' => $menu->FOTO_MENU,
                'NAMA_MENU' => $menu->NAMA_MENU,
                'HARGA_MENU' => $menu->HARGA_MENU,
                'delete' => '0'
            ]);
            return redirect('menu-sign-in')
                ->with("success", "Added to Favorite " . $menu->NAMA_MENU);
        } else {
            DB::table('menu_favorit')
                ->where([
                    ['ID_PEMBELI', '=', $idP],
                    ['ID_MENU', '=', $menu->ID_MENU]
                ])
                ->delete();
            return redirect('menu-sign-in')
                ->with("success", "Removed from Favorite " . $menu->NAMA_MENU);
        }
    }



    public function checkout()
    {
        $cart = Cart::getAll();
        foreach ($cart as $c) {
            $menu = $c["menu"];
            $jumlah = $c["jumlah"];
            //DB:beginTransaction();
        }
    }
}
