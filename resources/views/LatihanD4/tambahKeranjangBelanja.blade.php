@extends('template')
@section('title', 'Tambah Keranjang Belanja')
@section('konten')

    <h2>Tambah Keranjang Belanja</h2>

    {{-- Action form mengarah ke keranjangbelanja.store --}}
    <form action="{{ route('keranjangbelanja.store') }}" method="POST">
        @csrf
<div class="card">
        <div class="card-header">
            Form Tambah Data Keranjang Belanja
        </div>

        <div class="card-body">
            <form action="/keranjangbelanja/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="ID" class="col-sm-2 col-form-label">ID Pembelian</label>
                    <div class="col-sm-10">
                        <input type="number" name="ID" id="ID" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="KodeBarang" class="col-sm-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-10">
                        <input type="text" name="KodeBarang" id="KodeBarang" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                        <input type="number" name="Jumlah" id="Jumlah" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="number" name="Harga" id="Harga" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection
