<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenjualanSepeda extends Model
{
    protected $table = 'penjualan_sepeda';
    protected $primarykey = 'id';
    protected $fillable = [
        'nama_pembeli', 'merk_sepeda', 'jumlah_sepeda', 'tanggal_pembelian', 'total_harga'
    ];

    protected $dates = [
        'tanggal_pembelian'
    ];
}
