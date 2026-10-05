<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Demo Blade</title>
</head>
<body>
    <h1>Demo Blade</h1>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
        </tr>
        @foreach ($mahasiswa as $mhs)
            <tr>
                <td>{{ $mhs->nim }}</td>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->email ?? 'Tidak ada email' }}</td>
            </tr>
        @endforeach
    </table>

    <h2>Uji XSS</h2>
    <p>Dengan {{ $xss }}</p>
    <p>Dengan {!! $xss !!}</p>
</body>
</html>