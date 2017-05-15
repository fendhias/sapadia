<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';

    protected $fillable = [
        'nama_produk',
        'harga',
        'deskripsi',
        'id_kategori',
        'id_users',
        'foto',
    ];

    public function getNamaProdukAttribute($nama_produk)
    {
        return ucwords($nama_produk);
    }

    public function setNamaProdukAttribute($nama_produk)
    {
        $this->attributes['nama_produk'] = strtolower($nama_produk);
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
