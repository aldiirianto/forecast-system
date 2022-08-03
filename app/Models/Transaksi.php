<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'data_transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $fillable = [
        'id_produk',
        'tgl_transaksi',
        'qty',
    ];

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function produk() {
        return $this->belongsTo('App\Models\Produk');
    }

    public function kategori() {
        return $this->belongsTo('App\Models\Kategori');
    }
}
