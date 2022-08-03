@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col">
    <div class="card">
        <div class="card-header">
            <a href="{{ route('transaksi.create') }}" class="btn btn-sm btn-primary">
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
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Nama Produk</th>
                  <th>Qty</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tbody>
              @foreach($datatransaksi as $transaksi)
                <tr>
                  <td>
                  {{ ++$no }}
                  </td>
                  <td>
                  {{ $transaksi->id_produk }}
                  </td>
                  <td>
                  {{ $transaksi->qty }}
                  </td>
                  <td>        
                  </td>
                  <td>
                  </td>
                  <td>
                    <a href="" class="btn btn-sm btn-info mb-2">
                      Detail
                    </a>
                    <a href="" class="btn btn-sm btn-primary mb-2">
                      Edit
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection