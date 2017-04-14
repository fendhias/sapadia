<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';

    protected $fillable = [
        'nama_siswa',
        'deskripsi',
        'id_kategori',
        'id_users',
        'foto',
    ];

    public function getNamaSiswaAttribute($nama_siswa)
    {
        return ucwords($nama_siswa);
    }

    public function setNamaSiswaAttribute($nama_siswa)
    {
        $this->attributes['nama_siswa'] = strtolower($nama_siswa);
    }

    public function telepon()
    {
        return $this->hasOne('App\Telepon', 'id_siswa');
    }

    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'id_kategori');
    }

    public function users()
    {
        return $this->belongsTo('App\User', 'id_users');
    }

    public function scopeKelas($query, $id_kelas)
    {
        return $query->where('id_kelas', $id_kelas);
    }

}
