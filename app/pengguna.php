<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    //
    protected $table = 'pengguna';
    protected $filllable = ['username','password'];
}
