<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $fillable = ['nama', 'telepon', 'alamat'];

    public function kk()
    {
      return $this->hasMany(kk::class);
    }
}
