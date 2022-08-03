<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
        return $this->belongsTo('App\Models\Produk', 'id_produk');
    }

    public function kategori() {
        return $this->belongsTo('App\Models\Kategori', 'id_kategori');
    }



    public function allData()
    {
        return DB::table('data_transaksi')
            ->leftJoin('produk', 'produk.id_produk', '=', 'data_transaksi.id_produk')
            ->leftJoin('kategori', 'kategori.id_kategori', '=', 'produk.id_kategori')
            ->get();
    }
}

