<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // Nama tabel (opsional, Laravel otomatis pakai nama jamak 'mahasiswas')
    protected $table = 'tugas1';

    // Kolom yang boleh diisi secara mass-assignment (saat pakai create() atau update())
    protected $fillable = [
        'id',
        'nama',
        'nim',
        'jurusan',
    ];

    // Nonaktifkan timestamps jika tabel kamu tidak punya kolom created_at & updated_at
    public $timestamps = false;
}