<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SignInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sign-in', [
            "title" => "Sign In"
        ]);
    }

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

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);
        $email = $request->email;
        $password = $request->password;
        $userdata = DB::table('pembeli')->where('EMAIL', $email)->first();
        if (is_null($userdata)) {
            return back()->with('LoginError', 'Sign In Failed');
        } else {
            $obj = get_object_vars($userdata);
            if ($password == $obj['PASSWORD']) {
                $request->session()->put('email', $request->email);
                $request->session()->put('poin', $obj['POIN']);
                $request->session()->put('noHP', $obj['NO_HP']);
                $request->session()->put('alamat', $obj['ALAMAT']);
                $request->session()->put('gender', $obj['JENIS_KELAMIN']);
                $request->session()->put('firstname', $obj['FIRST_NAME']);
                $request->session()->put('lastname', $obj['LAST_NAME']);
                $request->session()->put('foto', $obj['FOTO_PEMBELI']);

                // $image = session('foto');
                // $image = DB::query('select FOTO_PEMBELI from pembeli where ID_PEMBELI=$idPembeli')->get();
                // $imageData = base64_encode(file_get_contents($image));
                // $src = 'data: ' . mime_content_type($image) . ';base64,' . $imageData;

                //titip buat id pembeli
                $idPembeli = $obj['ID_PEMBELI'];
                $request->session()->put('idPembeli', $obj['ID_PEMBELI']);
                $dataordersonprocess = DB::table('transaksi_beli')
                ->where('ID_PEMBELI', session('idPembeli'))
                ->where('STATUS_PESANAN', 'On Process')
                ->orWhere('STATUS_PESANAN', 'Pending')
                ->get()
                ->toArray();
                $countdataordersonprocess = count($dataordersonprocess);

                $request->session()->put('countdataordersonprocess', $countdataordersonprocess);

                 $dataorderscomplete = DB::table('transaksi_beli')
                ->where('ID_PEMBELI', session('idPembeli'))
                ->where('STATUS_PESANAN', 'Selesai')
                ->orWhere('STATUS_PESANAN', 'Cancelled')
                ->get()
                ->toArray();
                $countdataorderscomplete = count($dataorderscomplete);
                $request->session()->put('countdataorderscomplete', $countdataorderscomplete);

                $orders = DB::table('transaksi_beli')->where('ID_PEMBELI', $idPembeli)->first();
                $fav = DB::table('menu_favorit')->where('ID_PEMBELI', $idPembeli)->first();
                if (!is_null($fav)) {
                    $obj = get_object_vars($fav);
                    $request->session()->put('fav', $obj['ID_MENU']);
                    // $menulist = DB::table('menu')->where('ID_MENU', $favid);
                    // $request->session()->put('favfoto', $obj['FOTO_MENU']);
                } else {
                    $request->session()->put('fav', '');
                }

                if (!is_null($orders)) {
                    $obj = get_object_vars($orders);
                    $request->session()->put('orders', $obj['ID_TB']);
                    $request->session()->put('total', $obj['TOTAL_BAYAR']);
                    return view(
                        'home-sign-in',
                        ['title' => 'Home']
                    );
                } else {
                    $request->session()->put('orders', '');

                    return view(
                        'home-sign-in',
                        ['title' => 'Home']
                    );
                }
            } else {
                return back()->with('LoginError', 'Sign In Failed');
            }
        }
    }

    public function showChangePasswordGet()
    {
        return view('profile-signin');
    }

    public function changePasswordPost(Request $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "Your current password does not matches with the password.");
        }

        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
            // Current password and new password same
            return redirect()->back()->with("error", "New Password cannot be same as your current password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:8|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success", "Password successfully changed!");
    }
}
