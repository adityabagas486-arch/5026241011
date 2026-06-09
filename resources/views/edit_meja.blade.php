@extends('template')
@section('title', 'Data Meja')
@section('konten')
    <a href="/meja" class="btn btn-secondary mb-4">Kembali</a>

    @foreach($meja as $m)
    <div class="card">
        <div class="card-header">Form Edit Data Meja</div>
        <div class="card-body">
            <form action="/meja/update_meja" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="id" value="{{ $m->kodemeja }}">

                <div class="row mb-3">
                    <label for="merkmeja" class="col-sm-2 col-form-label">Merk Meja</label>
                    <div class="col-sm-10">
                        <input type="text" name="merkmeja" id="merkmeja" class="form-control" required value="{{ $m->merkmeja }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stockmeja" class="col-sm-2 col-form-label">Stock</label>
                    <div class="col-sm-10">
                        <input type="number" name="stockmeja" id="stockmeja" class="form-control" required value="{{ $m->stockmeja }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <select name="tersedia" id="tersedia" class="form-control" required>
                            <option value="Y" {{ $m->tersedia == 'Y' ? 'selected' : '' }}>Y</option>
                            <option value="N" {{ $m->tersedia == 'N' ? 'selected' : '' }}>N</option>
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
    @endforeach
@endsection
