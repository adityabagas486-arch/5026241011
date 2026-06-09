<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MejaDBController extends Controller
{
    public function indexMeja()
    {
        $meja = DB::table('meja')->paginate(10);
        return view('indexMeja', ['meja' => $meja]);
    }

    public function tambah_meja()
    {
        return view('tambah_meja');
    }

    public function store_meja(Request $request)
    {
        DB::table('meja')->insert([
            'merkmeja'  => $request->merkmeja,
            'stockmeja' => $request->stockmeja,
            'tersedia'  => $request->tersedia
        ]);
        return redirect('/meja');
    }

    public function edit_meja($id)
    {
        $meja = DB::table('meja')->where('kodemeja', $id)->get();
        return view('edit_meja', ['meja' => $meja]);
    }

    public function update_meja(Request $request)
    {
        DB::table('meja')->where('kodemeja', $request->id)->update([
            'merkmeja'  => $request->merkmeja,
            'stockmeja' => $request->stockmeja,
            'tersedia'  => $request->tersedia
        ]);
        return redirect('/meja');
    }

    public function hapus_meja($id)
    {
        DB::table('meja')->where('kodemeja', $id)->delete();
        return redirect('/meja');
    }

    public function cari_meja(Request $request)
    {
        $cari = $request->cari;
        $meja = DB::table('meja')
            ->where('merkmeja', 'like', "%" . $cari . "%")
            ->paginate();
        return view('indexMeja', ['meja' => $meja]);
    }
}
