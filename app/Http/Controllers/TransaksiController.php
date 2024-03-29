<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Transaksi;
use DB;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->Transaksi = new Transaksi();
    }

    public function index()
    {
        $datatransaksi = Transaksi::orderBy('tgl_transaksi', 'asc')->paginate(500);
        $itemproduk = Produk::paginate(20);
        $itemkategori = Kategori::paginate(20);
        $data = ['title' => 'Transaksi',
        'data_transaksi' => $datatransaksi,
        'itemproduk' => $itemproduk,
        'itemkategori' => $itemkategori
        ];
        return view('transaksi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $itemproduk = Produk::orderBy('nama_produk', 'asc')->get();
        $data = array('title' => 'Form Transaksi Baru',
                    'itemproduk' => $itemproduk);
        return view('transaksi.create', $data);//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'tgl_transaksi' => 'required|date',
            'qty' => 'required',
        ]);
        $itemuser = $request->user();//ambil data user yang login
        $inputan = $request->all();
        $inputan['user_id'] = $itemuser->id;
        $datatransaksi= Transaksi::create($inputan);
        return redirect()->route('transaksi.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_transaksi)
    {
        $datatransaksi = Transaksi::findOrFail($id_transaksi);
        $data = array('title' => 'Detail Transaksi');
        return view('transdaksi.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_transaksi)
    {
        $datatransaksi = Transaksi::findOrFail($id_transaksi);
        $data = array('title' => 'Form Eit Transaksi',
                      'datatransaksi' => $datatransaksi,);
        return view('transaksi.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_transaksi)
    {
        $this->validate($request, [
            'tgl_transaksi' => 'required',
            'qty'=> 'required',
        ]);
        $datatransaksi = Transaksi::findOrFail($id_transaksi);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_transaksi)
    {
        $datatransaksi = Transaksi::findOrFail($id_transaksi);//cari berdasarkan id = $id, 
        // kalo ga ada error page not found 404
        if ($datatransaksi->delete()) {
            return back()->with('success', 'Data berhasil dihapus');
        } else {
            return back()->with('error', 'Data gagal dihapus');
        }
    }

    public function grafik()
    {
        $total_qty = Transaksi::select(DB::raw("CAST(SUM(qty) as int) as total_qty"))
        ->GroupBy(DB::raw("Month(created_at)"))
        ->pluck('total_qty');

        $bulan = Transaksi::select(DB::raw("MONTHNAME(created_at) as bulan"))
        ->GroupBy(DB::raw("MONTHNAME(created_at)"))
        ->pluck('bulan');
        dd($total_qty);

        return view('transaksi.grafik', compact('total_qty', 'bulan'));
    }
}