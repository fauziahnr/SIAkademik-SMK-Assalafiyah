<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kk extends Model
{
    protected $table = 'kk';
    protected $fillable = ['nomor_kk','nama','semester'];

    public function penduduk()
    {
      return $this->belongsToMany(Penduduk::class)->withPivot(['nik']);
    }

    public function guru()
    {
      return $this->belongsToMany(Guru::class)->withPivot(['nama']);
    }
}
