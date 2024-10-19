<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penghuni extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_penghuni'; // Perhatikan 'P' besar di primaryKey

    protected $table = 'penghunis';

    // Tambahkan fillable jika ingin menggunakan mass assignment
    protected $fillable = [
        'id_penghuni', 
        'nama_penghuni', 
        'nik', 
        'no_hp_penghuni', 
        'jenis_kelamin',
        'id_akun',
        'id_kamar'
    ];
}
