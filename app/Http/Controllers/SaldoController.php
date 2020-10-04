<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesertadidik;
use App\Models\Saldo;

class SaldoController extends Controller
{
    public function saldo()
    {
        $pesertadidiks = Pesertadidik::pluck('namapd', 'id');
        return view('app.saldo', compact('pesertadidiks', $pesertadidiks));
    }

    public function storesaldo(Request $request)
    {
        $store = new Saldo;
        $store->saldo = $request->saldo;
        $store->pesertadidik_id = $request->pesertadidik_id;

        $store->save();

        return redirect()->back();
    }
}
