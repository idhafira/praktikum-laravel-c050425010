<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\MahasiswaController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/artikel', function () {
//     return view('artikel');
// });

// Route::get('/mahasiswa', function () {
//  $data = Mahasiswa::all();
//  return view('mahasiswa.index', compact('data'));
// });

// // routenya matkul
// Route::get('/matakuliah', [MatakuliahController::class, 'index']);
// Route::get('/matakuliah/create', [MatakuliahController::class, 'create']);
// Route::post('/matakuliah', [MatakuliahController::class, 'store']);

// prakitkum 1
// Route::get('/', function () {
//  return view('welcome');
// });

// Route::get('/halo', function () {
//  return 'Halo, ini adalah route pertama saya!';
// });

// Tugas mandiri praktikum 1
// Route::get('/profil', function () {
//     return 'Ini halaman profil saya.';
// });
// Route::get('/kontak', function () {
//     return 'Ini halaman kontak: email@contoh.com';
// });
// Route::get('/tentang', function () {
//     return 'Ini halaman tentang aplikasi.';
// });

// praktikum 2
// Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
// Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'show'])
//     ->where('nim', '[0-9]+')
//     ->name('mahasiswa.show');

// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::get('/dashboard', function () {
//         return 'Dashboard Admin';
//     })->name('dashboard');
// });

// tugas 2
// Route::prefix('akademik')->group(function () {

//     Route::get('/mahasiswa', [MahasiswaController::class, 'index'])
//         ->name('mahasiswa.index');

//     Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'show'])
//         ->where('nim', '[0-9]+')
//         ->name('mahasiswa.show');

//     Route::get('/matakuliah', [MatakuliahController::class, 'index'])
//         ->name('matakuliah.index');

//     Route::get('/matakuliah/{kode}', [MatakuliahController::class, 'show'])
//         ->name('matakuliah.show');
// });

// praktikum 3
Route::resource('mahasiswa', MahasiswaController::class);

// tugas 3
Route::resource('matakuliah', MatakuliahController::class)
    ->only(['index', 'show', 'create', 'store']);

// praktikum 4
// Route::get('/sapa', function () {
//     return view('sapa', ['nama' => 'Ahmad Fauzi']);
// });

// tugas 4
Route::get('/profil-mahasiswa', function () {
    return view('profil')
        ->with('nama', 'Muhammad Idhafi Ramadhan')
        ->with('nim', 'C050425010')
        ->with('prodi', 'Sistem Informasi Kota Cerdas');
});
 
Route::get('/statistik', function () {
    return view('akademik.statistik', ['jumlah' => Mahasiswa::count()]);
});

// praktikum 5
Route::get('/sapa', function () {
    return view('sapa', [
        'nama' => 'Ahmad Fauzi',
        'kontenHtml' => '<strong>Teks Tebal</strong>',
    ]);
});

// tugas 5
Route::get('/blade-demo', function () {
    $mahasiswa = Mahasiswa::take(5)->get();

    return view('blade-demo', [
        'mahasiswa' => $mahasiswa,
        'xss' => "<script>alert('XSS')</script>",
    ]);
});

