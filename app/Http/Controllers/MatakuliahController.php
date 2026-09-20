<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use App\Models\User;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    // Menampilkan daftar mata kuliah
    public function index()
    {
        $data = Matakuliah::with('dosen')->get();
        return view('matakuliah.index', compact('data'));
    }

    // Menampilkan form tambah mata kuliah
    public function create()
    {
        $dosens = User::all(); // untuk dropdown pilih dosen
        return view('matakuliah.create', compact('dosens'));
    }

    // Menyimpan data baru dari form
    public function store(Request $request)
    {
        Matakuliah::create([
            'kode_mk' => $request->kode_mk,
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks,
            'semester' => $request->semester,
            'dosen_id' => $request->dosen_id,
        ]);

        return redirect('/matakuliah')->with('success', 'Mata kuliah berhasil ditambahkan');
    }
}