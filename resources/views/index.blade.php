<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    {{-- Tombol kembali ke Home --}}
    <a href="{{ url('/') }}" 
    style="display: inline-block; margin-bottom: 10px; padding: 8px 12px; background-color: #007bff; color: white; text-decoration: none; border-radius: 4px;">
    ← Kembali ke Home
    </a>

    <a href="{{ url('/mahasiswa') }}">+ Tambah Data Form</a>
    <br><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
        </tr>

        @forelse ($mahasiswa as $mhs)
            <tr>
                <td>{{ $mhs->id }}</td>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->nim }}</td>
                <td>{{ $mhs->jurusan }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="4">Belum ada data mahasiswa.</td>
            </tr>
        @endforelse
    </table>
</body>
</html>