<?php

namespace App\Models;

use App\Models\pembayaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class tagihan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_tagihan'; // Perhatikan 'P' besar di primaryKey

    protected $table = 'tagihans';

    // Tambahkan fillable jika ingin menggunakan mass assignment
    protected $fillable = [ 
        'jumlah_tagihan', 
        'tanggal_tagihan', 
        'tenggat_tagihan', 
        'id_penghuni',
        'nama_penghuni'
    ];

    public function pembayaran()
{
    return $this->hasOne(pembayaran::class, 'id_tagihan', 'id_tagihan');
}

    
}
