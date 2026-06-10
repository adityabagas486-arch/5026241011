@extends('template')
@section('title', 'Data Keranjang Belanja')
@section('konten')

    <h2>Data Keranjang Belanja</h2>

    {{-- Tombol ke halaman tambah --}}
    <a href="{{ route('tambahKeranjangBelanja') }}" class="btn btn-primary">Tambah Keranjang Belanja</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Kode Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>

        @forelse($keranjangbelanja as $row)
            <tr>
                <td>{{ $row->ID }}</td>
                <td>{{ $row->KodeBarang }}</td>
                <td>{{ $row->Jumlah }}</td>
                <td>{{ $row->Harga }}</td>
                <td>{{ $row->Jumlah * $row->Harga }}</td>
                <td>
                    {{-- Tombol hapus dengan route keranjangbelanja.hapus --}}
                    <a href="{{ route('keranjangbelanja.hapus', $row->ID) }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">Belum ada data keranjang belanja.</td>
            </tr>
        @endforelse
    </table>

    {{-- Menampilkan link pagination --}}
    {{ $keranjangbelanja->links() }}

@endsection
