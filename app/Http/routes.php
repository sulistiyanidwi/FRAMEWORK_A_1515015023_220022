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
//Route::get('mahasiswa','dosen_matakuliahcontroller@awal');
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

Route::get('/login', 'sesicontroller@form');
Route::post('/login', 'sesicontroller@validasi');
Route::get('/logout', 'sesicontroller@logout');
Route::get('/', 'sesicontroller@index');
Route::group(['Middleware'=>'Authentifikasiuser'],function()
{
Route::get('mahasiswa/', 'mahasiswacontroller@awal');
Route::get('mahasiswa/tambah', 'mahasiswacontroller@tambah');
Route::post('mahasiswa/simpan', 'mahasiswacontroller@simpan');
Route::get('mahasiswa/edit/{mahasiswa}', 'mahasiswacontroller@edit');
Route::post('mahasiswa/edit/{mahasiswa}', 'mahasiswacontroller@update');
Route::get('mahasiswa/lihat/{mahasiswa}', 'mahasiswacontroller@lihat');
Route::get('mahasiswa/hapus/{mahasiswa}', 'mahasiswacontroller@hapus');

Route::get('dosen_matakuliah/', 'dosen_matakuliahcontroller@awal');
Route::get('dosen_matakuliah/tambah', 'dosen_matakuliahcontroller@tambah');
Route::post('dosen_matakuliah/simpan', 'dosen_matakuliahcontroller@simpan');
Route::get('dosen_matakuliah/edit/{dosen_matakuliah}', 'dosen_matakuliahcontroller@edit');
Route::post('dosen_matakuliah/edit/{dosen_matakuliah}', 'dosen_matakuliahcontroller@update');
Route::get('dosen_matakuliah/lihat/{dosen_matakuliah}', 'dosen_matakuliahcontroller@lihat');
Route::get('dosen_matakuliah/hapus/{dosen_matakuliah}', 'dosen_matakuliahcontroller@hapus');

Route::get('jadwal_matakuliah/', 'jadwal_matakuliahcontroller@awal');
Route::get('jadwal_matakuliah/tambah', 'jadwal_matakuliahcontroller@tambah');
Route::post('jadwal_matakuliah/simpan', 'jadwal_matakuliahcontroller@simpan');
Route::get('jadwal_matakuliah/edit/{jadwal_matakuliah}', 'jadwal_matakuliahcontroller@edit');
Route::post('jadwal_matakuliah/edit/{jadwal_matakuliah}', 'jadwal_matakuliahcontroller@update');
Route::get('jadwal_matakuliah/lihat/{jadwal_matakuliah}', 'jadwal_matakuliahcontroller@lihat');
Route::get('jadwal_matakuliah/hapus/{jadwal_matakuliah}', 'jadwal_matakuliahcontroller@hapus');

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


Route::get('dosen', 'dosencontroller@awal');
Route::get('dosen/tambah', 'dosencontroller@tambah');
Route::post('dosen/simpan', 'dosencontroller@simpan');
Route::get('dosen/edit/{dosen}', 'dosencontroller@edit');
Route::post('dosen/edit/{dosen}', 'dosencontroller@update');
Route::get('dosen/lihat/{dosen}', 'dosencontroller@lihat');
Route::get('dosen/hapus/{dosen}', 'dosencontroller@hapus');
Route::get('ujiHas', 'relationshipreborncontroller@ujiHas');
Route::get('ujiDoesntHave', 'relationshipreborncontroller@ujiDoesntHave');
});
//Route::get('/',function() 
//	{
//		return\App\dosen_matakuliah::whereHas('dosen',function($query)
//		{
//			$query->where('nama','like','%s%');
//		})->with('dosen')->groupBy('dosen_id')->get();
//	});

//Route::get('/',function() 
//	{
//		return\App\dosen_matakuliah::whereHas('dosen',function($query)
//		{
//			$query->where('nama','like','%s%');
//		})
//		->OrWhereHas('matakuliah',function($kueri)
//		{
//			$kueri->where('title','like','%s%');
//		})
//		-> with('dosen')
//		->groupBy('dosen_id')
//		->get();
//	});

//Route::get('/',function(Illuminate\Http\Request $request)
//{
//	echo "ini adalah request dari get". $request->nama;
//});

//use Illuminate\Http\Request;
//Route::get('/',function()
//{
//	echo Form::open(['url'=>'/']).
//			Form::label('nama').
//			Form::text('nama',null).
//			Form::submit('kirim').
//			Form::close();
//});
//Route::post('/',function(Request $request)
//{
//	echo "Hasil dari form input tadi nama : ".$request->nama;
//});

