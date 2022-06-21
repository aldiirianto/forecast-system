@extends('layouts.template')
@section('content')
<div class="container-fluid">

    <!-- table produk -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Search Data Produk</h5>
                    <div class="card-tools">
                        <a href="" class="btn btn-sm btn-primary">
                            Tambah Produk
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if ($message = Session::get('error'))
                        <div class="alert alert-warning">
                            <p>{{ $message }} </p>
                        </div>
                    @endif
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }} </p>
                        </div>
                    @endif
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Kode Produk</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $dataproduk as $data)
                            <tr>
                                <td>
                                {{ $data -> id_produk }}
                                </td>
                                <td>
                                {{ $data -> nama_produk }}
                                </td>
                                <td>
                                {{ $data -> harga }}
                                </td>
                                <td>
                                    <a href="" class="btn btn-sm btn-primary mr-2 mb-2">
                                        Edit
                                    </a>
                                    <form action="" method="post" style="display:inline;":>
                                    @csrf
                                    {{ method_field('delete')}}
                                    <button type="submit" class="btn btn-sm btn-danger mb-2">
                                        Hapus
                                    </button>
                                    </form>
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