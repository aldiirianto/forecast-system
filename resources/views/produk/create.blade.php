@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col col-lg-6 col-md-6">
      <div class="card">
        <div class="card-header">
          <div class="card-tools">
            <a href="{{ route('produk.index') }}" class="btn btn-sm btn-danger">
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
          <form action="{{ route('produk.store') }}" method="post">
            @csrf
            <div class="form-group">
              <label for="id_kategori">Kategori Produk</label>
              <select name="id_kategori" id="id_kategori" class="form-control">
                <option value="">Pilih Kategori</option>
                @foreach($itemkategori as $kategori)
                <option value="{{ $kategori->id_kategori }}">{{ $kategori->nama_kategori }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="nama_produk">Nama Produk</label>
              <input type="text" name="nama_produk" id="nama_produk" class="form-control">
            </div>
            <div class="form-group">
              <label for="slug_produk">Slug Produk</label>
              <input type="text" name="slug_produk" id="slug_produk" class="form-control">
            </div>
            <div class="form-group">
              <label for="deskripsi_produk">Deskripsi</label>
              <textarea name="deskripsi_produk" id="deskripsi_produk" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="harga">Harga Jual</label>
              <input type="text" name="harga" id="harga" class="form-control">
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