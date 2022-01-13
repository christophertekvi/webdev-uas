<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProfileSignInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data1 = DB::table('transaksi_beli')
            ->where('ID_PEMBELI', session('idPembeli'))
            ->where(function ($query) {
                $query->where('STATUS_PESANAN', 'On Process')
                    ->orWhere('STATUS_PESANAN', 'Pending');
            })
            ->get()
            ->toArray();
        $countdataordersonprocess = count($data1);
        $data2 = DB::table('transaksi_beli')
            ->where('ID_PEMBELI', session('idPembeli'))
            ->where(function ($query) {
                $query->where('STATUS_PESANAN', 'Selesai')
                    ->orWhere('STATUS_PESANAN', 'Cancelled');
            })
            ->get()
            ->toArray();
        $countdataorderscomplete = count($data2);
        $dataordersonprocess = DB::table('transaksi_beli')
            ->where('ID_PEMBELI', session('idPembeli'))
            ->where(function ($query) {
                $query->where('STATUS_PESANAN', 'On Process')
                    ->orWhere('STATUS_PESANAN', 'Pending');
            })
            ->simplePaginate($countdataordersonprocess);

        $dataorderscomplete = DB::table('transaksi_beli')
            ->where('ID_PEMBELI', session('idPembeli'))
            ->where(function ($query) {
                $query->where('STATUS_PESANAN', 'Selesai')
                    ->orWhere('STATUS_PESANAN', 'Cancelled');
            })
            ->simplePaginate($countdataorderscomplete);

        //buat ngambil gambar dr tabel menu yg id nya sama di menu fav
        // $imgFavMenu = DB::table('menu')
        //     ->where('ID_MENU', session('fav'))
        //     ->get();
        // dd($imgFavMenu->ID_MENU);

        $pembeli = session('idPembeli');
        $listFav = DB::table('menu_favorit')->where('ID_PEMBELI', $pembeli)->get();
        // dd($listFav);
        // $check = false;
        // foreach ($listFav as $lf) {
        //     // dd($imgFavMenu->ID_MENU);
        //     if ($lf->ID_MENU == $imgFavMenu->ID_MENU) {
        //         $check = true;
        //     }
        // }
        // if ($check) {
        //     DB::table('menu_favorit')
        //         ->where([
        //             ['ID_PEMBELI', '=', $pembeli],
        //             ['ID_MENU', '=', $imgFavMenu->ID_MENU]
        //         ])
        //         ->delete();
        // } else {
        // }

        return view('profile-signin', [
            "dataorderscomplete" => $dataorderscomplete,
            "dataordersonprocess" => $dataordersonprocess,
            "listFav" => $listFav,
            "title" => "Profile"
        ]);
    }

    public function delFav(Request $request)
    {
        $idfav = $request->input("favv");
        $imgFavMenu = Menu::query()->findOrFail($idfav);

        $pembeli = session('idPembeli');
        $listFav = DB::table('menu_favorit')->where('ID_PEMBELI', $pembeli)->get();
        
        $check = false;
        foreach ($listFav as $lf) {
            if ($lf->ID_MENU == $imgFavMenu->ID_MENU) {
                $check = true;
            }
        }
        if ($check) {
            DB::table('menu_favorit')
                ->where([
                    ['ID_PEMBELI', '=', $pembeli],
                    ['ID_MENU', '=', $imgFavMenu->ID_MENU]
                ])
                ->delete();
        }
        return redirect()->back()
            ->with("success", "Removed from Favorite " . $imgFavMenu->NAMA_MENU);
    }

    // public function list()
    // {
    //     $imgFavMenu = DB::table('menu')
    //         ->where('ID_MENU', session('fav'))
    //         ->get();
    //     return view('profile-signin', [
    //         "imgFavMenu" => $imgFavMenu,
    //         "title" => "Profile"
    //     ]);
    // }

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
}
