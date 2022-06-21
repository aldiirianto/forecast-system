<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\DataProduk; //berelasi dengan database barang
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

class ProdukController extends Controller
{
    public function __construct()
    {
        $this->DataProduk = new DataProduk();
    }

    public function index() 
    {
        $data = [
            'dataproduk' => $this->DataProduk->allData(),
        ];


        return view('dataproduk', $data);
    }


}
