<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class nilaikuliah extends Controller
{
    public function index2()
    {
    	// mengambil data dari table nilaikuliah
    	$nilaikuliah = DB::table('nilaikuliah')->paginate(10);

    	// mengirim data nilaikuliah ke view index
        return view('latihanE5.index',['nilaikuliah' => $nilaikuliah]);

    }

        // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('latihanE5.create');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('nilaikuliah')->insert([
			'id' => $request->id,
			'nrp' => $request->nrp,
            'nilaiangka' => $request->nilaiangka,
            'sks' => $request->sks,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/nilaikuliah');

	}

}
