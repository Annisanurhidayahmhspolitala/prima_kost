<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kamar extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_kamar'; // Perhatikan 'P' besar di primaryKey

    protected $table = 'kamars';

    // Tambahkan fillable jika ingin menggunakan mass assignment
    protected $fillable = [
        'id_kamar', 
        'info_kamar',
        'no_kamar', 
        'harga_kamar',
        'status_kamar'
    ];

}
