<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosencontroller extends Controller
{
    //
     public function awal ()
    {
    	return "Selamat Satang";
}
public function tambah()
{
	return $this->simpan();
}
public function simpan()
{
	$dosen = new dosen();
	$dosen -> nama = 'Dwi Sulis';
	$dosen -> nip = '1515015023';
	$dosen -> alamat = 'Jln.Kemakmuran';
	$dosen -> pengguna_id = 1;
	$dosen -> save();
	return "data dengan nama {$dosen->nama} telah disimpan";
}
}
