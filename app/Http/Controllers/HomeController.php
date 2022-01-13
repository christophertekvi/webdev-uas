<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // public function index()
    // {
    //     return view('home', [
    //         "title" => "Home",
    //         "slug" => "home-sign-in"
    //     ]);
    // }

    public function showbestseller()
    {
        $bestseller = DB::table('detail_beli')
            ->join('menu', 'detail_beli.ID_MENU', '=', 'menu.ID_MENU')
            ->select('detail_beli.ID_MENU', 'NAMA_MENU', 'HARGA_MENU', 'FOTO_MENU', DB::raw('SUM(`QUANTITY_BELI`)'))
            ->groupBy('menu.ID_MENU')
            ->orderByRaw('SUM(`QUANTITY_BELI`) DESC')
            ->limit(5)
            ->get();
        //dd($bestseller);
        return view("home", [
            "bestseller" => $bestseller,
            "title" => "Home",
            //"slug" => "home-sign-in"
        ]);
    }

    public function showbestsellers()
    {
        $bestseller = DB::table('detail_beli')
            ->join('menu', 'detail_beli.ID_MENU', '=', 'menu.ID_MENU')
            ->select('detail_beli.ID_MENU', 'NAMA_MENU', 'HARGA_MENU', 'FOTO_MENU', DB::raw('SUM(`QUANTITY_BELI`)'))
            ->groupBy('menu.ID_MENU')
            ->orderByRaw('SUM(`QUANTITY_BELI`) DESC')
            ->limit(5)
            ->get();
        //dd($bestseller);
        return view("home-sign-in", [
            "bestseller" => $bestseller,
            "title" => "Home",
            //"slug" => "home-sign-in"
        ]);
    }

    public function show($slug)
    {

    }
}
