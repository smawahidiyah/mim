<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tingkat;

class TingkatController extends Controller
{
    public function storetingkat(Request $request)
    {
        $store = new Tingkat;

        $store->tingkat = $request->tingkat;
        $store->save();


        return redirect()->back();
    }

    public function tingkat()
    {
        return view('app.tingkat');
    }
}
