<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koleksi_pribadi extends Model
{
    use HasFactory;

    protected $table = 'koleksi_pribadis';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'buku_id'
    ];

    /**
     * Get the user that owns the koleksi pribadi.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the buku that owns the koleksi pribadi.
     */
    public function buku()
    {
        return $this->belongsTo(Buku::class);
}
}