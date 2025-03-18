<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategoris';

    protected $fillable = [
        'nama',
    ];

    // Relasi dengan model Produk (one-to-many)
    public function buku()
    {
        return $this->hasMany(Buku::class);
    }

    // Mengaktifkan timestamps (created_at dan updated_at)
    public $timestamps = true;
}
