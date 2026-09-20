<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;
use App\Http\Controllers\MatakuliahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/artikel', function () {
    return view('artikel');
});

Route::get('/mahasiswa', function () {
 $data = Mahasiswa::all();
 return view('mahasiswa.index', compact('data'));
});

// routenya matkul
Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/create', [MatakuliahController::class, 'create']);
Route::post('/matakuliah', [MatakuliahController::class, 'store']);