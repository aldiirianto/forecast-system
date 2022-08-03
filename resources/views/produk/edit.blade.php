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
          <form action="{{ route('produk.update', $itemproduk->id_produk) }}" method="post">
            {{ method_field('patch') }}
            @csrf
            <div class="form-group">
              <label for="id_kategori">Kategori Produk</label>
              <select name="id_kategori" id="id_kategori" class="form-control">
                <option value="">Pilih Kategori</option>
                @foreach($itemkategori as $kategori)
                <option value="{{ $kategori->id_kategori }}" {{ $itemproduk->id_kategori == $kategori->id_kategori ? 'selected' : ''}}>{{ $kategori->nama_kategori }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="nama_produk">Nama Produk</label>
              <input type="text" name="nama_produk" id="nama_produk" value="{{ $itemproduk->nama_produk }}" class="form-control">
            </div>
            <div class="form-group">
              <label for="harga">Harga Jual</label>
              <input type="text" name="harga" id="harga" value="{{ $itemproduk->harga }}" class="form-control">
            </div>
            <!-- <div class="form-group">
              <label for="status">Status</label>
              <select name="status" id="status" class="form-control">
                <option value="publish" {{ $itemproduk->status == 'publish'? 'selected': ''}}>Publish</option>
                <option value="unpublish" {{ $itemproduk->status == 'unpublish'? 'selected': ''}}>Unpublish</option>
              </select>
            </div> -->
            <div class="form-group">
              <button type="submit" class="btn btn-success">Update</button>
              <button type="reset" class="btn btn-warning">Reset</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection