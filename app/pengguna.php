<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
class pengguna extends Model implements Authenticatable
{
    use AuthenticatableTrait;
    protected $table = 'pengguna';
    protected $fillable = ['username','password'];

    public function mahasiswa()
    {
        return $this->hasOne(mahasiswa::class);
    }

    public function dosen()
    {

        return $this->hasOne(dosen::class);
    }

    public function peran()
    {
        return $this->belongsToMany(peran::class);
    }
}
