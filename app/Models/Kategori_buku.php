<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBuku extends Model
{
    use HasFactory;

    protected $table = 'kategori_bukus';

    protected $fillable = [
        'buku_id',
        'kategori_id'
    ];

    public function kategori()
{
    return $this->belongsToMany(Kategori::class, 'kategori_bukus');
}

}
