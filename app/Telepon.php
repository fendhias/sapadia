<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telepon extends Model
{
    protected $table = 'telepon';

    protected $primaryKey = 'id_siswa';

    protected $fillable = [
        'id_siswa',
        'nomor_telepon',
    ];

    public function produk()
    {
        return $this->belongsTo('App\Produk', 'id');
    }
}
