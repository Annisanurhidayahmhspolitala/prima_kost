<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $table = 'ratings';
    protected $primaryKey = 'id_rating';

    protected $fillable = [
        'id_kamar',
        'id_penghuni',
        'kenyamanan',
        'kebersihan',
        'keamanan',
        'rating',
        'ulasan',
    ];

    /**
     * Relasi ke model Kamar.
     */
    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'id_kamar', 'id_kamar');
    }

    /**
     * Relasi ke model Penghuni.
     */
    public function penghuni()
    {
        return $this->belongsTo(Penghuni::class, 'id_penghuni', 'id_penghuni');
    }
}
