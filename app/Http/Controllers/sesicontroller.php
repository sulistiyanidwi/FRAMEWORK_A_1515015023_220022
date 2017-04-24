<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\pengguna;
use Illuminate\Auth\SessionGuard;
use Auth;

class sesicontroller extends Controller
{
	public function index()
	{
		return view('master');
	}
	public function form()
	{
		if(Auth::check()){
			return redirect('/');
		}
		return view('login');
	}
	public function validasi(Request $input)
	{
		$this->validate($input,[
			'username'=>'required',
			'password'=>'required',
			]);
		$pengguna=pengguna::where($input->only('username','password'))->first();
		if(! is_null($pengguna)){
			Auth::login($pengguna);
			if(Auth::check())
				return redirect('/')->with('informasi',"Selamat Datang".Auth::user()->username);
		}
		return redirect('/login')->withErrors(['Pengguna Tidak Ditemukan']);
	}

	public function logout()
	{
		if(Auth::check()){
			Auth::logout();
		
		return redirect('/login')->withErrors(['Silahkan Login Untuk Masuk Sistem']);
	}
	else{
		return redirect('login')->withErrors(['Silahkan Login terlebih Dahulu']);

	}
}
}