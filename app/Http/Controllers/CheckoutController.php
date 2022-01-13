<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Carbon\Carbon;

class CheckoutController extends Controller
{
    public function index(){
        $id = session('idPembeli');
        $data = DB::table('keranjang')
                    ->select('id_menu', 'nama_menu', 'foto_menu', 'harga_menu', 'qty')
                    ->where('id_pembeli' ,$id)
                    ->get();

        $total = DB::table('keranjang')->select(DB::raw('sum(harga_menu*qty) as total'))->where('ID_PEMBELI', $id)->get();
        $alamat = DB::table('pembeli')->select(DB::raw('alamat'))->where('ID_PEMBELI', $id)->get();
        $poin = DB::table('pembeli')->select(DB::raw('poin'))->where('ID_PEMBELI', $id)->get();
        //dd($poin);

        return view('checkout',
            ["title" => "Checkout",
            "checkout" => $data,
            "total" => $total,
            "poin" => $poin,
            "alamat" => $alamat
            // "subtotal" => $data->harga_menu
        ]);
    }

    public function checkout(Request $request){
        $id = session('idPembeli');

        $genidtb = DB::select('select `GenIDTB`()');
        $type = ["COD", "Transfer Bank"];
        $tglKirim = $request->input("tanggalPesan");
        $alamat = $request->input("alamat");
        $pesan = $request->input("pesan");
        $ongkir = 10000;

        $paymentmethod = $type[$request->input("payment")];
        //dd($paymentmethod);
        $data = DB::table('keranjang')
                    ->select('id_menu', 'nama_menu', 'foto_menu', 'harga_menu', 'qty')
                    ->where('id_pembeli' ,$id)
                    ->get();
        $total = DB::table('keranjang')->select(DB::raw('sum(harga_menu*qty) as total'))->where('ID_PEMBELI', $id)->get();

        $poin = DB::table('pembeli')->select(DB::raw('poin'))->where('ID_PEMBELI', $id)->get();
        $totalbayar = $total - $poin + $ongkir;
        $dapet = $totalbayar * 0.1;
        DB::table('transaksi_beli')->insert([
            'ID_PEMBELI' => $genidtb,
            'TANGGAL_TRANSAKSI' => now(),
            'SUBTOTAL_TRANSAKSI' => $total,
            'PAKE_POIN' => $poin,
            'TANGGAL_KIRIM' => $tglKirim,
            'NOTES_PESAN' => $pesan,
            'ALAMAT' => $alamat,
            'ONGKIR' => $ongkir,
            'TOTAL_BAYAR' => $totalbayar,
            'CARA_PEMBAYARAN' => $paymentmethod,
            'DAPET_POIN' => $dapet,
            'STATUS_PESANAN' => 'PENDING',
            'TB_DELETE' => 0
        ]);

        foreach($data as $d)
        {
            DB::table('detail_beli')->insert([
                'ID_TB' => $genidtb,
                'ID_PEMBELI' => $id,
                'ID_MENU' => $data -> id_menu,
                'QUANTITY_BELI' => $data -> qty,
                'SUBTOTAL' => ($data->harga_menu)*($data->qty),
                'RATING' => null,
                'review' => null,
                'DB_DELETE' => 0
            ]);
        }

        return redirect('detail-pesanan');
    }
}
