<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $table = 'warga';
    protected $fillable = ['nama_depan', 'nama_belakang', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'kelurahan', 'pekerjaan', 'agama', 'status_kawin',];
}
