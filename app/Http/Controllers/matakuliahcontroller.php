<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class matakuliahcontroller extends Controller
{
    //
	 public function awal ()
    {
    	return "Hello dari matakuliahcontroller";
}
public function tambah()
{
	return $this->simpan();
}
public function simpan()
{
	$matakuliah = new matakuliah();
	$matakuliah -> title = 'SMBD';
	$matakuliah -> keterangan = '2 jam';
	$matakuliah -> save();
	return "data dengan mata kuliah {$matakuliah->title} telah disimpan";
}
}
