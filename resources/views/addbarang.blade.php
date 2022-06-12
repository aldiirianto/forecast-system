@extends('layouts.template')

@section('konten')
<h4> Add Barang </h4>

<form action="/barang/insert" method="POST" enctype="multipart/form-data">

    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Kode Item</label>
                    <input name="kode_barang" class="form-control">
                </div>

                <div class="form-group">
                    <label>Nama Item</label>
                    <input name="nama_barang" class="form-control">
                </div>

                <div class="form-group">
                    <label>Jenis Item</label>
                    <input name="jenis_barang" class="form-control">
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <input name="harga" class="form-control">
                </div>

                <div class="form-group">
                    <label>Jumlah</label>
                    <input name="jumlah" class="form-control">
                </div>

                <div class="form-group">
                    <label>Foto Barang</label>
                    <input type="file" name="gambar" class="form-control">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-sm">Simpan</button>
                </div>

            </div>
        </div>
    </div>


</form>


@endsection