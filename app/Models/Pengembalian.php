<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';
    protected $fillable = [
        'noktp', 'tgl_pengembalian', 'idpetugas', 'idbuku'
    ];

    public $primaryKey = "idtransaksi";

    public $timestamps = false;

    public function detailTransaksiPengembalian()
    {
        return $this->hasMany(DetailTransaksi::class, 'idtransaksi', 'idtransaksi');
    }
}
