<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileSignInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataordersonprocess = DB::table('transaksi_beli')
            ->where('ID_PEMBELI', session('idPembeli'))
            ->where('STATUS_PESANAN', 'On Process')
            ->orWhere('STATUS_PESANAN', 'Pending')
            ->simplePaginate(5);

        $dataorderscomplete = DB::table('transaksi_beli')
            ->where('ID_PEMBELI', session('idPembeli'))
            ->where('STATUS_PESANAN', 'Selesai')
            ->orWhere('STATUS_PESANAN', 'Cancelled')
            ->simplePaginate(5);

        $imgFavMenu = DB::table('menu')
            ->where('ID_MENU', session('fav'))
            ->get();

        return view('profile-signin', [
            "dataorderscomplete" => $dataorderscomplete,
            "dataordersonprocess" => $dataordersonprocess,
            "imgFavMenu" => $imgFavMenu,
            "title" => "Profile"
        ]);
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
