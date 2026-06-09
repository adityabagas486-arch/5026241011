@extends('template')
@section('title', 'Data Meja')
@section('konten')
    <a href="/meja" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">Form Tambah Data Meja</div>
        <div class="card-body">
            <form action="/meja/store_meja" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="merkmeja" class="col-sm-2 col-form-label">Merk Meja</label>
                    <div class="col-sm-10">
                        <input type="text" name="merkmeja" id="merkmeja" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stockmeja" class="col-sm-2 col-form-label">Stock</label>
                    <div class="col-sm-10">
                        <input type="number" name="stockmeja" id="stockmeja" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <select name="tersedia" id="tersedia" class="form-control" required>
                            <option value="">-- Pilih --</option>
                            <option value="Y">Y</option>
                            <option value="N">N</option>
                        </select>
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
