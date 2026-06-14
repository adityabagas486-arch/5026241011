@extends('template')
@section('judul_halaman', 'Data Nilai Kuliah')
@section('konten')
<p>
    <br>
    <a href="/nilaikuliah/tambah" class="btn btn-primary"> + Tambah Nilai Kuliah Baru</a>
</p>
	<br/>

	<br/>
	<table class="table table-hover table-striped">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>

		@foreach($nilaikuliah as $n)

        @php
        if ($n->nilaiangka <= 40) {
            $nilaihuruf = 'D';
        } elseif ($n->nilaiangka >= 41 && $n->nilaiangka <= 60) {
            $nilaihuruf = 'C';
        } elseif ($n->nilaiangka >= 61 && $n->nilaiangka <= 80) {
            $nilaihuruf = 'B';
        } else {
            $nilaihuruf = 'A';
        }
        @endphp

		<tr>
			<td>{{ $n->id }}</td>
			<td>{{ $n->nrp }}</td>
			<td>{{ $n->nilaiangka }}</td>
			<td>{{ $n->sks }}</td>
			<td>{{ $nilaihuruf }}</td>
            <td>{{ $n->nilaiangka * $n->sks }}</td>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $nilaikuliah->links() }}
@endsection
