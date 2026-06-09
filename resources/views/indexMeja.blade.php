@extends('template')
@section('title', 'Data Meja')
@section('konten')
<p>
    <br><a href="/meja/tambah_meja" class="btn btn-primary">Tambah Meja Baru</a>
</p>
    <p>Cari Data Meja :</p>
    <form action="/meja/cari_meja" method="GET" class="form-inline">
        <div class="form-group">
            <input type="text" name="cari" placeholder="Cari Meja .." class="form-control">
            <input type="submit" value="CARI" class="btn btn-success ml-2">
        </div>
    </form>
    <br />
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode</th>
            <th>Merk Meja</th>
            <th>Stock</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($meja as $m)
            <tr>
                <td>{{ $m->kodemeja }}</td>
                <td>{{ $m->merkmeja }}</td>
                <td>{{ $m->stockmeja }}</td>
                <td>{{ $m->tersedia }}</td>
                <td>
                    <a href="/meja/edit_meja/{{ $m->kodemeja }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/meja/hapus_meja/{{ $m->kodemeja }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $meja->links() }}
@endsection
