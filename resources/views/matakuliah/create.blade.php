@extends('layouts.app')
 
@section('judul', 'Tambah Mata Kuliah')
 
@section('konten')
    <h1>Tambah Mata Kuliah</h1>
 
    <form action="{{ route('matakuliah.store') }}" method="POST">
        @csrf
 
        <label>Kode MK:</label><br>
        <input type="text" name="kode_mk" required><br><br>
 
        <label>Nama MK:</label><br>
        <input type="text" name="nama_mk" required><br><br>
 
        <label>SKS:</label><br>
        <input type="number" name="sks" required><br><br>
 
        <label>Semester:</label><br>
        <input type="number" name="semester" required><br><br>
 
        <label>Dosen Pengampu:</label><br>
        <select name="dosen_id" required>
            <option value="">-- Pilih Dosen --</option>
            @foreach ($dosens as $dosen)
                <option value="{{ $dosen->id }}">{{ $dosen->name }}</option>
            @endforeach
        </select><br><br>
 
        <button type="submit">Simpan</button>
    </form>
@endsection
