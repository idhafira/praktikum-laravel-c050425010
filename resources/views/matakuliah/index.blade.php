@extends('layouts.app')
 
@section('judul', 'Daftar Mata Kuliah')
 
@section('konten')
    <h1>Daftar Mata Kuliah</h1>
    <p><a href="{{ route('matakuliah.create') }}">+ Tambah Mata Kuliah</a></p>
 
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
 
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th><th>Kode MK</th><th>Nama MK</th><th>SKS</th>
                <th>Semester</th><th>Dosen Pengampu</th><th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($matakuliah as $mk)
                <tr style="background-color: {{ $loop->even ? '#f2f2f2' : '#ffffff' }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mk->kode_mk }}</td>
                    <td>{{ $mk->nama_mk }}</td>
                    <td>
                        {{ $mk->sks }}
                        @if ($mk->sks > 3)
                            <strong>(SKS Besar)</strong>
                        @endif
                    </td>
                    <td>{{ $mk->semester }}</td>
                    <td>{{ $mk->dosen->name ?? '-' }}</td>
                    <td><a href="{{ route('matakuliah.show', $mk->id) }}">Lihat Detail</a></td>
                </tr>
            @empty
                <tr><td colspan="7">Belum ada data mata kuliah.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
