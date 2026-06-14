<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class siperpus extends Controller
{
    public function index2()
    {
    	// mengambil data dari table pegawai
    	$siperpus = DB::table('siperpus')->paginate(10);

    	// mengirim data pegawai ke view index
        return view('latihanEAS2.index',['siperpus' => $siperpus]);

    }

        // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('latihanEAS2.create');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('siperpus')->insert([
			'judul' => $request->judul,
			'penulis' => $request->penulis,
			'tahun' => $request->tahun,
            'sedangdipinjam' => $request->sedangdipinjam,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/siperpus');

	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$siperpus = DB::table('siperpus')->where('id',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('latihanEAS2.edit',['siperpus' => $siperpus]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('siperpus')->where('id',$request->id)->update([
			'judul' => $request->judul,
			'penulis' => $request->penulis,
			'tahun' => $request->tahun,
            'sedangdipinjam' => $request->sedangdipinjam,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/siperpus');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('siperpus')->where('id',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/siperpus');
	}


    // method untuk cari data pegawai
    	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$siperpus = DB::table('siperpus')
		->where('judul','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('latihanEAS2.index',['siperpus' => $siperpus]);

	}

}
