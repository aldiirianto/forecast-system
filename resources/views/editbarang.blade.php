@extends('home')

@section('konten')
<h4> Edit Barang </h4>

<form action="/barang/update/{{ $barang->id_barang }}" method="POST" enctype="multipart/form-data">

    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Kode Barang</label>
                    <input name="kode_barang" class="form-control" value="{{ $barang->kode_barang }}">
                </div>

                <div class="form-group">
                    <label>Nama Barang</label>
                    <input name="nama_barang" class="form-control" value="{{ $barang->nama_barang }}">
                </div>

                <div class="form-group">
                    <label>Jenis Barang</label>
                    <input name="jenis_barang" class="form-control" value="{{ $barang->jenis_barang }}">
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <input name="harga" class="form-control" value="{{ $barang->harga }}">
                </div>

                <div class="form-group">
                    <label>Jumlah</label>
                    <input name="jumlah" class="form-control" value="{{ $barang->jumlah }}">
                </div>

                <div class="col-sm 12">
                    <div class="col-sm-4">
                        <img src="{{ url('gambar/'.$barang->gambar) }}" width="100px">
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label>Ganti Gambar Barang</label>
                            <input type="file" name="gambar" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-sm">Simpan</button>
                </div>

            </div>
        </div>
    </div>


</form>


@endsection