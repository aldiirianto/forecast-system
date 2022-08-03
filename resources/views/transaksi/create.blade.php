@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col col-lg-6 col-md-6">
      <div class="card">
        <div class="card-header">
          <div class="card-tools">
            <a href="{{ route('transaksi.index') }}" class="btn btn-sm btn-danger">
              Tutup
            </a>
          </div>
        </div>
        <div class="card-body">
          @if(count($errors) > 0)
          @foreach($errors->all() as $error)
              <div class="alert alert-warning">{{ $error }}</div>
          @endforeach
          @endif
          @if ($message = Session::get('error'))
              <div class="alert alert-warning">
                  <p>{{ $message }}</p>
              </div>
          @endif
          @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <p>{{ $message }}</p>
              </div>
          @endif
          <form action="{{ route('transaksi.store') }}" method="post">
            @csrf
            <div class="form-group">
              <label for="id_produk">Nama Produk</label>
              <select name="id_produk" id="id_produk" class="form-control">
                <option value="">Pilih Produk</option>
                @foreach($itemproduk as $produk)
                <option value="{{ $produk->kategori->nama_kategori }}">{{ $produk->kategori->nama_kategori }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="tgl_transaksi">Tanggal Transaksi</label>
              <input type="date" name="tgl_transaksi" id="tgl_transaksi" class="form-control">
            </div>
            <div class="form-group">
              <label for="harga">Qty</label>
              <input type="text" name="qty" id="qty" class="form-control">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success">Simpan</button>
              <button type="reset" class="btn btn-warning">Reset</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection