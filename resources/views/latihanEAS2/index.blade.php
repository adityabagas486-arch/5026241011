@extends('template')
@section('judul_halaman', 'Data Siperpus')
@section('konten')
<p>
    <br>
    <a href="/siperpus/tambah" class="btn btn-primary"> + Tambah Data Siperpus Baru</a>
</p>

    <p>Cari Data Siperpus :</p>
        <form action="/siperpus/cari" method="GET">
            <input type="text" name="cari" placeholder="Cari Siperpus .." class="form-control">
            <input type="submit" value="CARI" class="btn btn-success mt-2">
        </form>
	<br/>

	<br/>
	<table class="table table-hover table-striped">
		<tr>
			<th>ID</th>
			<th>Judul</th>
			<th>Penulis</th>
			<th>Tahun</th>
            <th>Kategori</th>
            <th>Ketersediaan</th>
            <th>Pinjam</th>
		</tr>

		@foreach($siperpus as $p)

        @php
        if ($p->tahun >= 2021) {
            $kategori = 'Baru';
        } else {
            $kategori = 'Lama';
        }

        if ($p->sedangdipinjam) {
            $ketersediaan = 'Tidak Tersedia';
        } else {
            $ketersediaan = 'Tersedia';
        }
        @endphp

		<tr>
			<td>{{ $p->id }}</td>
			<td>{{ $p->judul }}</td>
			<td>{{ $p->penulis }}</td>
			<td>{{ $p->tahun }}</td>
			<td>{{ $kategori }}</td>
            <td>{{ $ketersediaan }}</td>
            <td>
                @if ($p->sedangdipinjam)
        
                @else
                    <a href="#" class="btn btn-warning btn-sm">Pinjam</a>
                @endif
            </td>
		</tr>
		@endforeach
	</table>
    {{ $siperpus->links() }}
@endsection
