<?php

namespace App\Models;

use App\Models\tagihan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'riwayat_pembayaran',
        'refrensi_pembayaran'
    ];

    // Relasi ke model Penghuni
    public function penghuni()
    {
        return $this->belongsTo(Penghuni::class, 'id_penghuni');
    }

    // Relasi ke model Tagihan
    public function tagihan()
    {
        return $this->belongsTo(tagihan::class, 'id_tagihan', 'id_tagihan');
    }


}
