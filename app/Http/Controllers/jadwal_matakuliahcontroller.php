<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\jadwal_matakuliah;
use App\ruangan;
use App\dosen_matakuliah;
use App\mahasiswa;
use App\pengguna;

class jadwal_matakuliahcontroller extends Controller{
protected $informasi = 'Gagal melakukan aksi';

public function awal(){
    $semuajadwal_matakuliah = jadwal_matakuliah::all();
    return view('jadwal_matakuliah.awal',compact('semuajadwal_matakuliah'));
}

public function tambah(){
    $dosen_matakuliah = new dosen_matakuliah;
    $mahasiswa = new mahasiswa;
    $ruangan = new ruangan;
    return view('jadwal_matakuliah.tambah',compact('mahasiswa','ruangan','dosen_matakuliah'));
}

public function simpan(Request $input){
    $this->validate($input,[
        'id_mahasiswa'=>'required',
        'dosen_matakuliah_id'=>'required',
        'ruangan_id'=>'required',
        ]);
    $jadwal_matakuliah= new jadwal_matakuliah($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id'));
        if ($jadwal_matakuliah->save()) $this->informasi = 'Berhasil Simpan Jadwal Mahasiswa ';
        return redirect('jadwal_matakuliah')->with(['informasi'=>$this->informasi]);
    }

public function edit($id){
    $jadwal_matakuliah = jadwal_matakuliah::find($id);
   $dosen_matakuliah = new dosen_matakuliah;
    $mahasiswa = new mahasiswa;
    $ruangan = new ruangan;
    return view('jadwal_matakuliah.edit',compact('ruangan','dosen_matakuliah','mahasiswa','jadwal_matakuliah'));
}
public function lihat($id){
    $jadwal_matakuliah = jadwal_matakuliah::find($id);
    return view('jadwal_matakuliah.lihat')->with(array('jadwal_matakuliah'=>$jadwal_matakuliah));
}
public function update($id, Request $input){
    $jadwal_matakuliah = jadwal_matakuliah::find($id);
    $jadwal_matakuliah->fill($input->only('matakuliah_id','dosen_matakuliah_id'));
    if($jadwal_matakuliah->save())$this->informasi="Jadwal Berhasil di update";
return redirect('jadwal_matakuliah')->with(['informasi'=>$this->informasi]);
}
public function hapus($id){
    $jadwal_matakuliah = jadwal_matakuliah::find($id);
    if($jadwal_matakuliah->delete()) $this->informasi = 'Berhasil Hapus data';
    return redirect('jadwal_matakuliah')->with(['informasi'=>$this->informasi]);
}
}