@extends('layouts.template')

@section('konten')
<h1> Detail Barang </h1>

<table class="table">
    <tr>
        <th width="100px">Kode Barang</th>
        <th width="30px">:</th>
        <th>{{ $barang->kode_barang }}</th>
    </tr>

    <tr>
        <th width="100px">Nama Barang</th>
        <th width="30px">:</th>
        <th>{{ $barang->nama_barang }}</th>
    </tr>

    <tr>
        <th width="100px">Jenis Barang</th>
        <th width="30px">:</th>
        <th>{{ $barang->jenis_barang }}</th>
    </tr>

    <tr>
        <th width="100px">Harga Barang</th>
        <th width="30px">:</th>
        <th>{{ $barang->harga }}</th>
    </tr>

    <tr>
        <th width="100px">Jumlah Barang</th>
        <th width="30px">:</th>
        <th>{{ $barang->jumlah }}</th>
    </tr>

    <tr>
        <th width="100px">Foto Barang</th>
        <th width="30px">:</th>
        <th><img src="{{ url('gambar/'.$barang->gambar) }}" width="400px"></th>
    </tr>

    <th>
        <a href="/barang" class="btn btn-success btn-sm">Kembali</a>
    </th>

</table>

@endsection