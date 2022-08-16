<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Forecast;
class ForecastController extends Controller
{
    public function index() {
        $datatransaksi = Transaksi::orderBy('tgl_transaksi', 'asc')->paginate(20);
        $data = array('title' => 'Forecast');
        return view('forecast.index',$data);
    }

    public function hitung() {
        $data = array('title' => 'Perhitungan');
        return view('forecast.hitung',$data);
    }
}
