<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penghuni extends Model
{
    use HasFactory;

    protected $table = 'penghunis';
    protected $primaryKey = 'id_penghuni';
    public $incrementing = false; // Non-auto-increment jika manual
    protected $fillable = [
        'id_penghuni',
        'nama_penghuni',
        'nik',
        'no_hp_penghuni',
        'jenis_kelamin',
        'id_akun',
        'id_kamar',
    ];

    public function akun()
    {
        return $this->belongsTo(User::class, 'id_akun', 'id');
}

public function pembayarans()
    {
        return $this->hasMany(Pembayaran::class, 'id_penghuni', 'id');
    }

}
