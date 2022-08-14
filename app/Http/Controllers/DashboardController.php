<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Transaksi;
use DB;

class DashboardController extends Controller
{
    public function index() {
        $data = array('title' => 'Dashboard');
        return view('dashboard.index', ['data' => $data, 'transaksi' => $transaksi]);
    }

    public function highChart()
    {
        $transaksi = \App\Models\Transaksi::count();
        $datatransaksi = \App\Models\Transaksi::all();
        $itemproduk = \App\Models\Produk::count();
        $itemkategori = Kategori::paginate(20);
        $title = 'Dashboard';

        $qty = \App\Models\Transaksi::sum('qty');
        $sum1 = \App\Models\Transaksi::where('id_produk', '7')->sum('qty');
        // dd($itemproduk);

        $categories = [];
        foreach($datatransaksi as $item){
            $categories[] =$item->produk->nama_produk;
        }

        // dd($qty);

        

        $categories['chart_data'] = json_encode($categories);
        $sum1= json_encode($sum1);

        // dd($categories);
        return view('dashboard.index', ['sum1' => $sum1,'itemproduk' => $itemproduk, 'transaksi' => $transaksi,'qty' => $qty,'datatransaksi' => $datatransaksi, 'title' => $title, 'categories' => $categories, 'qty' => $qty]);
    }
}