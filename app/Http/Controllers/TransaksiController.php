<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tingkat;
use App\Models\PesertaDidik;
use App\Models\Saldo;

class TransaksiController extends Controller
{
    public function transaksi()
    {
        $tingkats = Tingkat::pluck('tingkat', 'id');
        return view('app.transaksi', compact('tingkats', $tingkats));
    }

    public function getpesertadidik($tingkat_id)
    {
        $pesertadidiks = PesertaDidik::where('tingkat_id', $tingkat_id)->pluck('namapd', 'id');
        return $pesertadidiks;
    }

    public function getsaldo($pesertadidik_id)
    {
        $saldo = Saldo::where('pesertadidik_id', $pesertadidik_id)->pluck('saldo', 'id');
        return $saldo;
    }

    public function storetransaksi(Request $request)
    {
        $storetransaksi = $request->all();
        $transaksi = $request->transaksi;
        $pesertadidik_id = $request->pesertadidik_id;
        $saldo = Saldo::where('pesertadidik_id', $pesertadidik_id)->pluck('saldo');
        $saldos = $saldo[0];
        $updatesaldo = Saldo::where('pesertadidik_id','=', $pesertadidik_id)->first();
        $result = $transaksi + $saldos;
        $updatesaldo->saldo = $result;
        $updatesaldo->save();
        return redirect()->back();
    }
}
