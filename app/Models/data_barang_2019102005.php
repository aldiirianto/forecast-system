<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_barang_2019102005 extends Model
{
    protected $table = 'data_barang_2019102005';
    protected $fillable = [
        'nama_barang',
        'harga',
        'user_id',
    ];

    public function user() {//user yang menginput data kategori
        return $this->belongsTo('App\User', 'user_id');
    }
}
