<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class parkir extends Controller
{
    public function index2()
    {
    	// mengambil data dari table pegawai
    	$parkir = DB::table('parkir')->paginate(10);

    	// mengirim data pegawai ke view index
        return view('latihanEAS.index',['parkir' => $parkir]);

    }

        // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('latihanEAS.create');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('parkir')->insert([
			'platnomor' => $request->platnomor,
			'jeniskendaraan' => $request->jeniskendaraan,
			'lamaparkir' => $request->umur,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/parkir');

	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$parkir = DB::table('parkir')->where('id',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('latihanEAS.edit',['parkir' => $parkir]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('parkir')->where('id',$request->id)->update([
			'platnomor' => $request->platnomor,
			'jeniskendaraan' => $request->jeniskendaraan,
			'lamaparkir' => $request->lamaparkir,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/parkir');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('parkir')->where('id',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/parkir');
	}


    // method untuk cari data pegawai
    	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$parkir = DB::table('parkir')
		->where('platnomor','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('latihanEAS.index',['parkir' => $parkir]);

	}

}
