<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $guarded = [];
    //protected $fillable = ['nama_depan', 'nama_belakang', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'kelurahan', 'pekerjaan', 'agama', 'status_kawin','gambar','user_id'];


    public function getGambar()
    {
      if(!$this->gambar){
        return asset('gambar/default.png');
      }
      return asset('gambar/' .$this->gambar);
    }
    public function kk()
    {
      return $this->belongsToMany(kk::class)->withPivot(['nik']);
    }

    //public function mapel()
    //{
      //return $this->belongsToMany(Mapel::class)->withPivot(['nik']);;
    //}


}
