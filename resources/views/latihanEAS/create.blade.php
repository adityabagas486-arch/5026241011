@extends('template')
@section('judul_halaman', 'Data Parkir')
@section('konten')

<a href="/parkir" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Parkir
        </div>

        <div class="card-body">
            <form action="/parkir/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="platnomor" class="col-sm-2 col-form-label">Plat Nomor</label>
                    <div class="col-sm-10">
                        <input type="text" name="platnomor" id="platnomor" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jeniskendaraan" class="col-sm-2 col-form-label">Jenis Kendaraan</label>
                    <div class="col-sm-10">
                        <select name="jeniskendaraan" id="jeniskendaraan" class="form-control" required>
                            <option value="N">Motor</option>
                            <option value="M">Mobil</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="lamaparkir" class="col-sm-2 col-form-label">Lama Parkir (jam)</label>
                    <div class="col-sm-10">
                        <input type="number" name="lamaparkir" id="lamaparkir" class="form-control" required>
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
