@extends('template')
@section('judul_halaman', 'Data Siperpus')
@section('konten')

<a href="/siperpus" class="btn btn-secondary mb-4">Kembali</a>

    @foreach($siperpus as $p)

    <div class="card">
        <div class="card-header">
            Form Edit Data Siperpus
        </div>

        <div class="card-body">
            <form action="/siperpus/update" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="id" value="{{ $p->id }}">

                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="judul"
                            id="judul"
                            class="form-control"
                            required
                            value="{{ $p->judul }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="penulis"
                            id="penulis"
                            class="form-control"
                            required
                            value="{{ $p->penulis }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
                    <div class="col-sm-10">
                        <input
                            type="number"
                            name="tahun"
                            id="tahun"
                            class="form-control"
                            required
                            value="{{ $p->tahun }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="sedangdipinjam" class="col-sm-2 col-form-label">Sedang Dipinjam</label>
                    <div class="col-sm-10">
                        <input
                            type="number"
                            name="sedangdipinjam"
                            id="sedangdipinjam"
                            class="form-control"
                            required
                            value="{{ $p->sedangdipinjam }}"
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
