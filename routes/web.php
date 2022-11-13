<?php

use App\Http\Controllers\WargaController;
use App\Models\Warga;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/tes', function () {
    return view('templates.app');
});

Route::get('/warga', [WargaController::class, 'index'])->name('warga.index');

Route::get('/warga/create', [WargaController::class, 'create'])->name('warga.create');

Route::post('/warga', [WargaController::class, 'store'])->name('warga.store');

Route::get('/warga/{id}/edit', [WargaController::class, 'edit'])->name('warga.edit');

Route::put('/warga/{id}', [WargaController::class, 'update'])->name('warga.update');

Route::delete('/warga/{id}', [WargaController::class, 'destroy'])->name('warga.destroy');