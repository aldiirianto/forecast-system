@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <!-- table produk -->
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
            <a href="{{ route('produk.create') }}" class="btn btn-sm btn-primary">
              + Add New
            </a>
        </div>
        <div class="card-body">
          <form action="#">
            <div class="row">
              <div class="col">
                <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Cari kata kunci">
              </div>
              <div class="col-auto">
                <button class="btn btn-primary">
                  Cari
                </button>
              </div>
            </div>
          </form>
        </div>
        <div class="card-body">
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
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th width="50px">No</th>
                  <th>Gambar</th>
                  <th>Kategori</th>
                  <th>Nama Produk</th>
                  <th>Harga Jual</th>
                  <th>Keterangan</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($itemproduk as $produk)
                <tr>
                  <td>
                  {{ ++$no }}
                  </td>
                  <td>
                     <!-- image kategori --> 
                     @if($produk->foto != null)
                    <img src="{{ \Storage::url($produk->foto) }}" alt="{{ $produk->nama_kategori }}" width='150px' class="img-thumbnail mb-2">
                    <br>
                    <form action="{{ url('/admin/produkimage/'.$produk->id_produk) }}" method="post" style="display:inline;">
                      @csrf
                      {{ method_field('delete') }}
                      <button type="submit" class="btn btn-sm btn-danger mb-2">
                        Hapus
                      </button>                    
                    </form>
                    @else
                    <form action="{{ url('/admin/produkimage') }}" method="post" enctype="multipart/form-data" class="form-inline">
                      @csrf
                      <div class="form-group">
                        <input type="file" name="image" id="image">
                        <input type="hidden" name="id_produk" value="{{ $produk->id_produk }}">
                      </div>
                      <div class="form-group">
                        <button class="btn btn-primary">Upload</button>
                      </div>
                    </form>
                    @endif 
                    <!-- end image kategori -->
                  </td>
                  <td>
                  {{ $produk->id_kategori }}
                  </td> 
                  <td>
                  {{ $produk->nama_produk }}
                  </td>
                  <td>
                  {{ number_format($produk->harga, 2) }}
                  </td>
                  <td>
                  {{ $produk->keterangan }}
                  </td>
                  <td>
                    <a href="{{ route('produk.edit',$produk->id_produk) }}" class="btn btn-sm btn-success mr-2 mb-2">
                      Edit
                    </a>
                    <form action="{{ route('produk.destroy',$produk->id_produk) }}" method="post" style="display:inline;">
                      @csrf
                      {{ method_field('delete') }}
                      <button type="submit" class="btn btn-sm btn-danger mb-2">
                        Hapus
                      </button>                    
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{ $itemproduk->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection