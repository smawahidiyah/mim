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
        ddd($pesertadidiks);
        return response()->json($pesertadidiks);
    }
}
