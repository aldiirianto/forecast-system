<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForecastController extends Controller
{
    public function index() {
        $data = array('title' => 'Forecast');
        return view('forecast.index', $data);
    }

    public function hitung() {
        $data = array('title' => 'Perhitungan');
        return view('forecast.hitung', $data);
    }
}
