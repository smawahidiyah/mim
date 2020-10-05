<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PesertaDidik;
use App\Models\Tingkat;

class PesertaDidikController extends Controller
{
    public function pesertadidik()
    {
        $tingkats = Tingkat::pluck('tingkat', 'id');
    	return view('app.pesertadidik', compact('tingkats', $tingkats));

    }

    public function storepesertadidik(Request $request)
    {
    	$store = new PesertaDidik;
    	$store->tingkat_id = $request->tingkat_id;
    	$store->namapd = $request->namapd;
    	$store->nipd = $request->nipd;

    	$store->save();

    	return redirect()->back();
    }
}
