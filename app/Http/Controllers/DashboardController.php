<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Transaksi;

class DashboardController extends Controller
{
    public function index() {
        $data = array('title' => 'Dashboard');
        return view('dashboard.index', $data);
    }

    public function highChart()
    {
        $datatransaksi = Transaksi::orderBy('created_at', 'desc')->paginate(20);
        $itemproduk = Produk::paginate(20);
        $itemkategori = Kategori::paginate(20);
         $data = array('title' => 'Dashboard',
         'data_transaksi' => $datatransaksi,
         'data_transaksi' => $datatransaksi,
         'itemproduk' => $itemproduk,
         'itemkategori' => $itemkategori);
        return view('dashboard.index', $data);
    }
}