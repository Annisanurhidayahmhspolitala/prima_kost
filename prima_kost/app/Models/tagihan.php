<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tagihan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_tagihan'; // Perhatikan 'P' besar di primaryKey

    protected $table = 'tagihans';

    // Tambahkan fillable jika ingin menggunakan mass assignment
    protected $fillable = [
        'id_tagihan', 
        'jumlah_tagihan', 
        'tanggal_tagihan', 
        'tenggat_tagihan', 
        'id_penghuni'
    ];
}
