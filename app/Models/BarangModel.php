<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BarangModel extends Model
{
    public function allData()
    {
        return DB::table('tbl_brg')->get();
    }

    public function detailData($id_barang)
    {
        return DB::table('tbl_brg')->where('id_barang', $id_barang)->first();
    }

    public function addData($data)
    {
        DB::table('tbl_brg')->insert($data);
    }

    public function editData($id_barang, $data)
    {
        DB::table('tbl_brg')->where('id_barang', $id_barang)->update($data);
    }

    public function deleteData($id_barang)
    {
        DB::table('tbl_brg')->where('id_barang', $id_barang)->delete();
    }
}
