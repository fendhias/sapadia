<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';

    protected $fillable = [
        'nama_kategori'
    ];

    // Relasi Kelas 1 - n Siswa
    public function siswa()
    {
        return $this->hasMany('App\Produk', 'id_kategori');
    }
}
