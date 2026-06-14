@extends('template')
@section('judul_halaman', 'Data Parkir')
@section('konten')

<a href="/parkir" class="btn btn-secondary mb-4">Kembali</a>

    @foreach($parkir as $p)

    <div class="card">
        <div class="card-header">
            Form Edit Data Parkir
        </div>

        <div class="card-body">
            <form action="/parkir/update" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="id" value="{{ $p->id }}">

                <div class="row mb-3">
                    <label for="platnomor" class="col-sm-2 col-form-label">Plat Nomor</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="platnomor"
                            id="platnomor"
                            class="form-control"
                            required
                            value="{{ $p->platnomor }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jeniskendaraan" class="col-sm-2 col-form-label">Jenis Kendaraan</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="jeniskendaraan"
                            id="jeniskendaraan"
                            class="form-control"
                            required
                            value="{{ $p->jeniskendaraan }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="lamaparkir" class="col-sm-2 col-form-label">Lama Parkir</label>
                    <div class="col-sm-10">
                        <input
                            type="number"
                            name="lamaparkir"
                            id="lamaparkir"
                            class="form-control"
                            required
                            value="{{ $p->lamaparkir }}"
                        >
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

    @endforeach

@endsection
