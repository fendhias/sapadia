<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
  protected $table = 'anggota';

  protected $primaryKey = 'id';

  protected $fillable = [
      'nama_anggota',
      'tanggal_lahir',
      'jenis_kelamin',
      'telepon',
      'bio',
      'foto',
  ];

  public function getNamaAnggotaAttribute($nama_anggota)
  {
      return ucwords($nama_anggota);
  }

  public function setNamaAnggotaAttribute($nama_anggota)
  {
      $this->attributes['nama_anggota'] = strtolower($nama_anggota);
  }

  public function users()
  {
      return $this->belongsTo('App\User', 'id');
  }
}
