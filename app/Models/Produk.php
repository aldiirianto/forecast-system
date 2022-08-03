<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    protected $fillable = [
        'id_kategori',
        'user_id',
        'nama_produk',
        'harga',
    ];

    public function user() {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function kategori() {
        return $this->belongsTo('App\Models\Kategori', 'id_kategori');
    }

    public function transaksi() {
        return $this->hasMany(Transaksi::class);
    }

}

