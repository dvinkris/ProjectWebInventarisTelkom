@extends('layouts.app')

@section('content')
<div class="container">

<h2 id="judulhalaman">Data Alat Kerja (Alker)</h2>

<a href="{{ route('alkers.create') }}" class="btn btn-primary">
    + Tambah Alker
</a>

@if(session('success'))
<div class="alert-success">
    {{ session('success') }}
</div>
@endif

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Jumlah</th>
            <th>Kondisi</th>
            <th>Lokasi</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
    @foreach($alkers as $alker)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $alker->kode_alker }}</td>
            <td>{{ $alker->nama_alker }}</td>
            <td>{{ $alker->kategori }}</td>
            <td>{{ $alker->jumlah }}</td>
            <td>{{ $alker->kondisi }}</td>
            <td>{{ $alker->lokasi }}</td>
            <td>
                <div class="action-buttons">
                    <a href="{{ route('alkers.edit', $alker->id) }}" class="btn btn-edit">
                        Edit
                    </a>

                    <form action="{{ route('alkers.destroy', $alker->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-delete"
                            onclick="return confirm('Anda yakin akan menghapus data?')">
                            Hapus
                        </button>
                    </form>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
@endsection
