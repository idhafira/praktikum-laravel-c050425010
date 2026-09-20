<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE MATKUL</title>
</head>
<body>
    
    <h1>Tambah Mata Kuliah</h1>

    <form action="/matakuliah" method="POST">
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

</body>
</html>