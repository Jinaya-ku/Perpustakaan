<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenilaianBuku extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'penilaian_bukus';

    // Field yang bisa diisi (mass assignment)
    protected $fillable = [
        'user_id',
        'buku_id',
        'penilaian',
        'nilai',
    ];

    /**
     * Get the user that owns the penilaian.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the buku that owns the penilaian.
     */
    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }
}
