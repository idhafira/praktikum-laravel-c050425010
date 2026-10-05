<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

    // public function index()
    // {
    //     return 'Halaman daftar mata kuliah';
    // }

    // public function show($kode)
    // {
    //     return "Detail mata kuliah dengan kode: {$kode}";
    // }




    // public function index()   { return 'index: daftar mahasiswa'; }
    public function create()  { return 'create: form tambah mahasiswa'; }
    public function store(Request $request) { return 'store: simpan data baru'; }

    // public function show(Mahasiswa $mahasiswa) { return "Nama mahasiswa: {$mahasiswa->nama}"; }
    // public function show(Mahasiswa $mahasiswa)
    // {
    //     return "Nama mahasiswa: {$mahasiswa->nama}";
    // }

    public function edit($id) { return "edit: form edit mahasiswa id {$id}"; }
    public function update(Request $request, $id) { return "update: perbarui data id {$id}"; }
    public function destroy($id) { return "destroy: hapus data id {$id}"; }

    // public function index()
    // {
    //     $mahasiswa = Mahasiswa::all();
    //     return view('mahasiswa.index', compact('mahasiswa'));
    // }

    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        // $mahasiswa = Mahasiswa::where('id', 0)->get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }
    
    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    
}