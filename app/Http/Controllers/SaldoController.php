<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesertadidik;
use App\Models\Saldo;
use DB;

class SaldoController extends Controller
{
    public function saldo()
    {
        $saldo = Saldo::select('pesertadidik_id')->get();
        $pesertadidiks = Pesertadidik::whereNotIn('id', $saldo)->select('namapd', 'id')->get();
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
