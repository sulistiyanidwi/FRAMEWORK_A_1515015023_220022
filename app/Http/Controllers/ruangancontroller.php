<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class ruangancontroller extends Controller
{
    //
     public function awal ()
    {
    	return "Hello dari Ruangan";
}
public function tambah()
{
	return $this->simpan();
}
public function simpan()
{
	$ruangan = new ruangan();
	$ruangan -> title = '411A';
	$ruangan -> save();
	return "data dengan ruang {$ruangan->title} telah disimpan";
}
}
