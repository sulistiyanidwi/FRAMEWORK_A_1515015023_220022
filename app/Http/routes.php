<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\jadwal_matakuliah;
use app\dosen_matakuliah;
use App\matakuliah;
use App\ruangan;
use App\dosen;
use App\mahasiswa;
use App\pengguna;

//Route::get('/', function () {
  //  return view('welcome');
//});
//Route::get('/public', function () {
  //  return ('Nama Saya : Dwi Sulistiyani');
//});
//Route::get('/pengguna', function (){
  //  return "Hello Word From Dulis";
//});
//Route::get('pengguna', 'penggunacontroller@awal');

//Route::get('pengguna/tambah', function ()
//{
//	$pengguna = new pengguna();
//	$pengguna -> username = 'Dwi';
//	$pengguna -> password = 'doe_jon';
//	$pengguna -> save();
//	return "data dengan username {$pengguna->username} telah disimpan";
//});
//Route::get('mahasiswa','mahasiswacontroller@awal');
//Route::get('mahasiswa/tambah','mahasiswacontroller@tambah');

//Route::get('dosen', 'dosencontroller@awal');
//Route::get('dosen/tambah', 'dosencontroller@tambah');

//Route::get('ruangan', 'ruangancontroller@awal');
//Route::get('ruangan/tambah', 'ruangancontroller@tambah');

//Route::get('matakuliah', 'matakuliahcontroller@awal');
//Route::get('matakuliah/tambah', 'matakuliahcontroller@tambah');

//Route::get('dosen_matakuliah', 'dosen_matakuliahcontroller@awal');
//Route::get('dosen_matakuliah/tambah', 'dosen_matakuliahcontroller@tambah');

//Route::get('jadwal_matakuliah','jadwal_matakuliahcontroller@awal');
//Route::get('jadwal_matakuliah/tambah','jadwal_matakuliahcontroller@tambah');
//Route::get('pengguna/{pengguna}', 'penggunacontroller@lihat');

Route::get('pengguna','penggunacontroller@awal');
Route::get('pengguna/tambah', 'penggunacontroller@tambah');
Route::post('pengguna/simpan', 'penggunacontroller@simpan');
Route::get('pengguna/edit/{pengguna}', 'penggunacontroller@edit');
Route::post('pengguna/edit/{pengguna}', 'penggunacontroller@update');
Route::get('pengguna/lihat/{pengguna}', 'penggunacontroller@lihat');
Route::get('pengguna/hapus/{pengguna}', 'penggunacontroller@hapus');

Route::get('matakuliah', 'matakuliahcontroller@awal');
Route::get('matakuliah/tambah', 'matakuliahcontroller@tambah');
Route::post('matakuliah/simpan', 'matakuliahcontroller@simpan');
Route::get('matakuliah/edit/{matakuliah}', 'matakuliahcontroller@edit');
Route::post('matakuliah/edit/{matakuliah}', 'matakuliahcontroller@update');
Route::get('matakuliah/lihat/{matakuliah}', 'matakuliahcontroller@lihat');
Route::get('matakuliah/hapus/{matakuliah}', 'matakuliahcontroller@hapus');

Route::get('ruangan', 'ruangancontroller@awal');
Route::get('ruangan/tambah', 'ruangancontroller@tambah');
Route::post('ruangan/simpan', 'ruangancontroller@simpan');
Route::get('ruangan/edit/{ruangan}', 'ruangancontroller@edit');
Route::post('ruangan/edit/{ruangan}', 'ruangancontroller@update');
Route::get('ruangan/lihat/{ruangan}', 'ruangancontroller@lihat');
Route::get('ruangan/hapus/{ruangan}', 'ruangancontroller@hapus');


