<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'level'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getNameAttribute($name)
    {
        return ucwords($name);
    }

    public function anggota()
    {
        return $this->hasOne('App\Anggota', 'id');
    }

    public function produk()
    {
        return $this->hasMany('App\Produk', 'id_users');
    }
}
