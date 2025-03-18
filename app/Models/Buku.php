<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'bukus';

    // Field yang bisa diisi (mass assignment)
    protected $fillable = [
        'judul',
        'penulis',
        'penerbit',
        'tanggal_terbit',
        'gambar_buku',
        'stok',
    ];

    // Relasi one-to-many dengan Kategori
    public function kategori()
    {
        return $this->belongsToMany(Kategori::class);
    }

    // Relasi one-to-many dengan Peminjaman
    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }

    // Relasi many-to-many dengan Anggota
    public function anggota()
    {
        return $this->belongsToMany(User::class, 'peminjaman');
    }

    public function koleksiPribadi()
    {
        return $this->hasMany(Koleksi_Pribadi::class);
    }
}
