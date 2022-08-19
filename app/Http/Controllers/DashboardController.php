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
        $sum1 = Transaksi::select(DB::raw("SUM(qty) as total_sales"))
        ->whereYear("tgl_transaksi", date('Y'))
        ->groupBy(DB::raw("MONTH(tgl_transaksi)"))
        ->get();

        //dd($sum1);



        // $sum1 = \App\Models\Transaksi::where('id_produk', '8')
        // ->whereYear('created_at', date('Y'))
        // ->groupBy(\DB::raw("Month(created_at)"))
        // ->sum('qty');
        // dd($sum1);

        $categories = [];
        foreach($datatransaksi as $item){
            $categories[] =$item->nama_produk;
        }

        // dd($qty);

        

        $categories['chart_data'] = json_encode($categories);
        json_encode($sum1);
        // dd($sum1);


        // dd($categories);
        return view('dashboard.index', ['sum1' => $sum1,'itemproduk' => $itemproduk, 'transaksi' => $transaksi,'qty' => $qty,'datatransaksi' => $datatransaksi, 'title' => $title, 'categories' => $categories, 'qty' => $qty]);
    }
}