<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class mahasiswacontroller extends Controller
{
    //
     public function awal ()
    {
    	return "Hello Mahasiswa";
}
public function tambah()
{
	return $this->simpan();
}
public function simpan()
{
	$mahasiswa = new mahasiswa();
	$mahasiswa -> nama = 'Dwi Sulistiyani';
	$mahasiswa -> nim = '1515015023';
	$mahasiswa -> alamat = 'Jln.Kemakmuran';
	$mahasiswa -> pengguna_id = 1;
	$mahasiswa -> save();
	return "data dengan nama {$mahasiswa->nama} telah disimpan";
}

}
