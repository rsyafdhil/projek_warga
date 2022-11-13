<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index()
    {
        return view('warga.index', [
            'warga' => Warga::get(),
        ]);
    }
    public function create()
    {
        return view('warga.create');
    }
    public function store(Request $request)
    {
        $warga = new Warga();

        $warga->nama = $request->nama;
        $warga->nik = $request->nik;
        $warga->jenis_kel = $request->jenis_kel;
        $warga->tmp_lahir = $request->tmp_lahir;
        $warga->tgl_lahir = $request->tgl_lahir;
        $warga->agama = $request->agama;
        $warga->pendidikan = $request->pendidikan;
        $warga->pekerjaan = $request->pekerjaan;
        $warga->hub_keluarga = $request->hub_keluarga;

        $warga->save();

        return redirect()-> route('warga.index');
    }
    public function edit($id)
    {
        $warga = Warga::find($id);

        return view('warga.edit', [
            'warga' => $warga,
        ]);
    }
    public function update(Request $request, $id)
    {
        $warga = Warga::find($id);

        $warga->nama = $request->nama;
        $warga->nik = $request->nik;
        $warga->jenis_kel = $request->jenis_kel;
        $warga->tmp_lahir = $request->tmp_lahir;
        $warga->tgl_lahir = $request->tgl_lahir;
        $warga->agama = $request->agama;
        $warga->pendidikan = $request->pendidikan;
        $warga->pekerjaan = $request->pekerjaan;
        $warga->hub_keluarga = $request->hub_keluarga;

        $warga->save();

        return redirect()-> route('warga.index');
    }
    public function destroy($id)
    {
        $warga = Warga::find($id)->delete();
        return redirect()->route('warga.index');
    }
}
