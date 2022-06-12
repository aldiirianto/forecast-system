<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangModel;

class BarangController extends Controller
{
    public function __construct()
    {
        $this->BarangModel = new BarangModel();
       // $this->middleware('auth');
    }


    public function index()
    {
        $data = [
            'barang' => $this->BarangModel->allData(),
        ];


        return view('barang', $data);
    }

    public function detail($id_barang)
    {
        if (!$this->BarangModel->detailData($id_barang)) {
            abort(404);
        }
        $data = [
            'barang' => $this->BarangModel->detailData($id_barang),
        ];


        return view('detailbarang', $data);
    }

    public function add()
    {
        return view('addbarang');
    }

    public function insert()
    {
        //gambar
        $file = Request()->gambar;
        $fileName = Request()->kode_barang . '.' . $file->extension();
        $file->move(public_path('gambar'), $fileName);

        $data = [
            'kode_barang' => Request()->kode_barang,
            'nama_barang' => Request()->nama_barang,
            'jenis_barang' => Request()->jenis_barang,
            'harga' => Request()->harga,
            'jumlah' => Request()->jumlah,
            'gambar' => $fileName,
        ];

        $this->BarangModel->addData($data);
        return redirect()->route('barang')->with('pesan', 'Data Berhasil Ditambahkan !!');
    }

    public function edit($id_barang)
    {
        if (!$this->BarangModel->detailData($id_barang)) {
            abort(404);
        }
        $data = [
            'barang' => $this->BarangModel->detailData($id_barang),
        ];
        return view('editbarang', $data);
    }

    public function update($id_barang)
    {
        //gambar
        $file = Request()->gambar;

        $data = [
            'kode_barang' => Request()->kode_barang,
            'nama_barang' => Request()->nama_barang,
            'jenis_barang' => Request()->jenis_barang,
            'harga' => Request()->harga,
            'jumlah' => Request()->jumlah,

        ];

        $this->BarangModel->editData($id_barang, $data);
        return redirect()->route('barang')->with('pesan', 'Data Berhasil Di Update !!');
    }

    public function delete($id_barang)
    {
        $this->BarangModel->deleteData($id_barang);
        return redirect()->route('barang')->with('pesan', 'Data Berhasil Di Hapus !!');
    }
}
