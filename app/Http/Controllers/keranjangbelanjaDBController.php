<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaDBController extends Controller
{
    public function indexKeranjangBelanja()
    {
        // Mengambil data dari database dengan pagination
        $keranjangbelanja = DB::table('keranjangbelanja')->paginate(10);

        // Pastikan nama folder view-nya benar (LatihanD4)
        return view('LatihanD4.indexKeranjangBelanja', ['keranjangbelanja' => $keranjangbelanja]);
    }

    public function tambahKeranjangBelanja()
    {
        // Menampilkan form tambah
        return view('LatihanD4.tambahKeranjangBelanja');
    }

    public function storeKeranjangBelanja(Request $request)
    {
        // Menyimpan data ke tabel keranjangbelanja
        DB::table('keranjangbelanja')->insert([
            'ID'         => $request->ID,
            'KodeBarang' => $request->KodeBarang,
            'Jumlah'     => $request->Jumlah,
            'Harga'      => $request->Harga
        ]);

        return redirect('/keranjangbelanja');
    }

    public function hapusKeranjangBelanja($id)
    {
        // Menghapus data berdasarkan ID
        DB::table('keranjangbelanja')->where('ID', $id)->delete();

        return redirect('/keranjangbelanja');
    }
}
