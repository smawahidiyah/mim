<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TingkatController;
use App\Http\Controllers\PesertaDidikController;
use App\Http\Controllers\SaldoController;
use App\Http\Controllers\TransaksiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('panel.base');
});

Route::post('/storetingkat', [TingkatController::class, 'storetingkat'])->name('storetingkat');

Route::get('/tingkat', [TingkatController::class, 'tingkat'])->name('tingkat');

Route::get('/pesertadidik', [PesertaDidikController::class, 'pesertadidik'])->name('pesertadidik');

Route::post('/storepesertadidik', [PesertaDidikController::class, 'storepesertadidik'])->name('storepesertadidik');

Route::get('/saldo', [SaldoController::class, 'saldo'])->name('saldo');

Route::post('/storesaldo', [SaldoController::class, 'storesaldo'])->name('storesaldo');

Route::get('/transaksi', [TransaksiController::class, 'transaksi'])->name('transaksi');

Route::post('/storetransaksi', [TransaksiController::class, 'storetransaksi'])->name('storetransaksi');

Route::get('/getpesertadidik/{tingkat_id}', [TransaksiController::class, 'getpesertadidik']);
