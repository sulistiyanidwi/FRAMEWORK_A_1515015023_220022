<?php

namespace App\Http\Requests;
use App\Http\Requests\Request;

Class MahasiswaRequest extends Request
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		$validasi=[
		'nama'=>'required',
		'nim'=>'required',
		'alamat'=>'required',
		'username'=>'required'
		];
		if($this->is('mahasiswa/tambah')){
			$validasi['password']='required';
		}
		return $validasi;
	}
}