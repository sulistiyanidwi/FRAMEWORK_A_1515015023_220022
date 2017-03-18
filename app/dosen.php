<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    //
	 protected $table = 'dosen';
    protected $filllable = ['nama','nip','alamat','pengguna_id'];
}
