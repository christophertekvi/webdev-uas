<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Symfony\Component\Console\Input\Input;

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



        $pembeli = session('idPembeli');
        $listFav = DB::table('menu_favorit')->where('ID_PEMBELI', $pembeli)->get();

        //$detailpembeli = DB::table('pembeli')->where('ID_PEMBELI', $pembeli)->get();

        return view('profile-signin', [
            "dataorderscomplete" => $dataorderscomplete,
            "dataordersonprocess" => $dataordersonprocess,
            "listFav" => $listFav,
            //"detailpembeli" => $detailpembeli,
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

    public function editProfile(Request $request)
    {
        $pembeli = session('idPembeli');
        // $request->validate(["email" => "email"]);
        $request->validate(["nohp" => "numeric"]);
        // $request->validate(["alamat"]);
        $dp = DB::table('pembeli')->where('ID_PEMBELI', $pembeli)->first();

        // $request->session()->forget(['email']);
        // $request->session()->forget(['noHP']);
        // $request->session()->forget(['alamat']);

        // $img = $_FILES['img']['tmp_name'];
        // // $imgfile = $_FILES['image']['name'];
        // $img = base64_encode(file_get_contents(addslashes('img')));

        // $foto = Input::file('img');
        $this->validate($request, [
            'file' => 'file|image|mimes:jpeg,png,jpg'
        ]);
        $filefoto = $request->file('file');
        $filefoto->getRealPath();
        dd($filefoto);
        $fotoblob = base64_encode(file_get_contents($filefoto));
        // $foto = base64_encode($fotoblob);

        // $first = Str::substr('input-name',);
        // $fullname = 'input-name';
        // $split = explode(" ", $fullname);
        // dd($split);
        // $first = $split[0];
        // $last = $split[1];
        $updateDetails = [
            'FOTO_PEMBELI' => $fotoblob,
            // 'FIRST_NAME' => $request->input($first),
            // 'LAST_NAME' => $request->input($last),
            'EMAIL' => $request->input('email'),
            'NO_HP' =>  $request->input('nohp'),
            'ALAMAT' =>  $request->input('alamat')
        ];
        DB::table('pembeli')
            ->where('ID_PEMBELI', '=', $pembeli)
            ->update($updateDetails);
        //->get();

        $request->session()->put('email', $dp->EMAIL);
        $request->session()->put('noHP', $dp->NO_HP);
        $request->session()->put('alamat', $dp->ALAMAT);

        return redirect('profile-signin')
            ->with("success", "Profile successfully updated!");
    }


    public function detailpesanan($id) {
        $dataorders = DB::table('transaksi_beli')
        ->where('ID_TB', $id)->first();

        //dd($alamat->alamat);
        $detailorders = DB::table('detail_beli')
        ->where('ID_TB', $id)->get();
        //dd($detailorders);

        // foreach($detailorders as $do)
        // {
        //     $namamenu = DB::table('menu')->select('nama')->where('ID_MENU', $do->id_menu)->get();
        // }


        return view('detail-pesanan', [
            "dataorders" => $dataorders,
            "detailorders" => $detailorders,
            //"detailpembeli" => $detailpembeli,
            "title" => "Profile"
        ]);

    }
    // public function profileUpdated(){
    //     $pembeli = session('idPembeli');
    //     DB::table('pembeli')->where('ID_PEMBELI', '=', $pembeli)->first();
    // }


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
