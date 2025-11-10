<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel mahasiswa
        $mahasiswa = Mahasiswa::all();

        // Kirim data ke view index.blade.php
        return view('index', compact('mahasiswa'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|numeric',
            'jurusan' => 'required'
        ]);

        Mahasiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'jurusan' => $request->jurusan
        ]);

        // Setelah berhasil, kembali ke halaman tabel
        return redirect('/mahasiswatable')->with('success', 'Data berhasil disimpan!');
    }
}