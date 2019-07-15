<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penduduk;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
      if($request->has('cari')){
        $penduduks = \App\Penduduk::where('nama_depan','LIKE','%' -$request->cari- '%')->get();
      } else {
        $penduduks = \App\Penduduk::all();
      }
      $penduduks = Penduduk::orderBy('created_at', 'desc')->paginate(5);
      return view('penduduk.halamanpenduduk', compact('penduduks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penduduk.tambahpenduduk');

        //Insert ke table Users
        //$user = new \App\User;
        //$user->role ='penduduk';
        //$user->name = $request->nama_depan;
        //$user->email = $request->email;
        //$user->password = bcrypt('fauziah');
        //$user->remember_token = str_random(60);
        //$user->save();

        //Insert ke table penduduks
        //$request->request->add(['user_id' -> $user->id]);
        //$data = \App\Penduduk::create($request->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
          'nama_depan' => 'min:5',
          'nama_belakang' => 'min:5',
          'email' => 'required|email|unique:users',
          'jenis_kelamin' => 'min:5',
          'tempat_lahir' => 'min:5',
          'tanggal_lahir' => 'min:5',
          'alamat' => 'min:5',
          'kelurahan' => 'min:5',
          'pekerjaan' => 'min:5',
          'agama' => 'min:4',
          'status_kawin' => 'min:5',
          'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000'
            ]);

            $imageN = $request->gambar->getClientOriginalName();
            $request->gambar->storeAs('public/gambar', $imageN);

          Penduduk::create([
            'nama_depan' => $request->nama_depan,
            'nama_belakang' => $request->nama_belakang,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'kelurahan'=> $request->kelurahan,
            'pekerjaan' => $request->pekerjaan,
            'agama' => $request->agama,
            'status_kawin' => $request->status_kawin,
            'gambar' => $imageN
          ]);
          return redirect ()->route('SemuaPenduduk')->with('success', 'Tambah Data Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Penduduk $penduduk)
    {
        //return view('penduduk.detailpenduduk', compact('penduduk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Penduduk $penduduk)
    {
        return view('penduduk.editpenduduk', compact('penduduk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penduduk $penduduk)
    {
      $this->validate($request,[

        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000'
          ]);

          $imageN = $request->gambar->getClientOriginalName();
          $request->gambar->storeAs('public/gambar', $imageN);


      $penduduk->update([
        'nama_depan' => $request->nama_depan,
        'nama_belakang' => $request->nama_belakang,
        'jenis_kelamin' => $request->jenis_kelamin,
        'tempat_lahir' => $request->tempat_lahir,
        'tanggal_lahir' => $request->tanggal_lahir,
        'alamat' => $request->alamat,
        'kelurahan'=> $request->kelurahan,
        'pekerjaan' => $request->pekerjaan,
        'agama' => $request->agama,
        'status_kawin' => $request->status_kawin,
        'gambar' => $imageN
      ]);

      return redirect()->route('SemuaPenduduk')->with('success','Data Penduduk berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // $penduduk->delete();
      // return redirect()->route('SemuaPenduduk')->with('success','Data Penduduk berhasil dihapus');

      $penduduk = Penduduk::find($id);
      $gambar = $penduduk->gambar;
      unlink('private/storage/app/public/gambar/'. $penduduk->gambar);
      $penduduk->delete();
      return redirect()->route('SemuaPenduduk')->with('success','Data Penduduk berhasil dihapus');
    }

    public function profile(Penduduk $penduduk)
    {
        $mapel = \App\kk::all();
        //dd($mapel);
        return view('penduduk.profilependuduk', compact('penduduk'), compact('mapel->$mapel'));
    }

    public function addnilai(Request $request, Penduduk $id1)
    {
      //$mapel = \App\kk::find($id1);
      dd($request->all());
      //if ($mapel->kk()->where('kk_id', $request->mapel)->exist()) {
        //return redirect("{{$id1->kk}}/addnilai")->with('error','Data Pelajaran sudah ada');
      //}
      //$mapel->kk()->attach($request->mapel, ['nik' ->$request->nik]);
      //return redirect("{{$id1->kk}}/addnilai")->with('success','Data Penduduk berhasil diubah');
    }

    public function editnilai($id)
    {

    }

    //public function profile($id)
    //{
      //$data = \App\Penduduk::find($id);
      //return view('penduduk.profilependuduk',['penduduk' -> $data]);
    //}
}
