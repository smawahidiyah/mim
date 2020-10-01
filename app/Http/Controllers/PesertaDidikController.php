<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\PesertaDidik;

class PesertaDidikController extends Controller
{
    public function pesertadidik()
    {
    	return view('app.pesertadidik');
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
