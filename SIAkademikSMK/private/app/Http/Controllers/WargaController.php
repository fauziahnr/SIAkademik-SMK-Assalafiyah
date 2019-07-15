<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index()
    {
      $data_warga = \App\Warga::all();
      return view('warga.index',['data_warga' =>$data_warga]);
    }

    public function create(Request $request)
    {
      \App\Warga::create($request->all());
      return redirect('/warga');
    }

    public function store(Request $request)
    {
      Warga::create([
        'nama_depan' => $request->nama_depan,
        'nama_belakang' => $request->nama_belakang,
        'jenis_kelamin' => $request->jenis_kelamin,
        'tempat_lahir' => $request->tempat_lahir,
        'tanggal_lahir' => $request->tanggal_lahir,
        'alamat' => $request->alamat,
        'kelurahan' => $request->kelurahan,
        'pekerjaan' => $request->pekerjaan,
        'agama' => $request->agama,
        'status_kawin' => $request->status_kawin
      ]);
    }
}
