<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $guarded =[];

    // Nama primary key
    protected $primaryKey = 'id_pembayaran';

    // Kolom-kolom yang boleh diisi (fillable)
    protected $fillable = [
        'id_penghuni', 
        'id_tagihan', 
        'jumlah_pembayaran', 
        'metode_pembayaran', 
        'tanggal_pembayaran', 
        'riwayat_pembayaran'
    ];

    // Relasi ke model Penghuni
    public function penghuni()
    {
        return $this->belongsTo(Penghuni::class, 'id_penghuni');
    }

    // Relasi ke model Tagihan
    public function tagihan()
    {
        return $this->belongsTo(Tagihan::class, 'id_tagihan');
    }
}
