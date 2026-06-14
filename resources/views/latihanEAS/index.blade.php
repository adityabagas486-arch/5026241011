@extends('template')
@section('judul_halaman', 'Data parkir')
@section('konten')
<p>
    <br>
    <a href="/parkir/tambah" class="btn btn-primary"> + Tambah Data Parkir Baru</a>
</p>

    <p>Cari Data Parkir :</p>
        <form action="/parkir/cari" method="GET">
            <input type="text" name="cari" placeholder="Cari Parkir .." class="form-control">
            <input type="submit" value="CARI" class="btn btn-success mt-2">
        </form>
	<br/>

	<br/>
	<table class="table table-hover table-striped">
		<tr>
			<th>ID</th>
			<th>Plat Nomor</th>
			<th>Jenis Kendaraan</th>
			<th>Lama Parkir</th>
            <th>Tarif per Jam</th>
            <th>Total Biaya</th>
            <th>Aksi</th>
		</tr>

		@foreach($parkir as $p)

        @php
        if ($p->jeniskendaraan == 'M') {
            $tarifperjam = 5000;
        } else {
            $tarifperjam = 2000;
        }
        @endphp

		<tr>
			<td>{{ $p->id }}</td>
			<td>{{ $p->platnomor }}</td>
			<td>{{ $p->jeniskendaraan }}</td>
			<td>{{ $p->lamaparkir }}</td>
			<td>{{ $tarifperjam }}</td>
            <td>{{ $p->lamaparkir * $tarifperjam }}</td>
            <td>
                <a href="/parkir/edit/{{ $p->id }}" class="btn btn-warning btn-sm">Edit</a>
				|
				<a href="/parkir/hapus/{{ $p->id }}" class="btn btn-danger btn-sm">Hapus</a>
                </td>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $parkir->links() }}
@endsection
