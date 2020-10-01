<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TingkatController;
use App\Http\Controllers\PesertaDidikController;

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
