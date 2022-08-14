<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForecastController extends Controller
{
    public function index() {
        $data = array('title' => 'Forecast');
        return view('forecast.index', $data);
    }
}
