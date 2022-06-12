@extends('layouts.template')
@section('title', 'DATA ITEM')
@section('titlekonten' , 'DATA ITEM')
@section('konten')

<a href="/barang/add" class="btn btn-primary brn-sm">Add</a>

<h1>TABEL DATA ITEM</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Item</th>
            <th>Nama Item</th>
            <th>Jenis Item</th>
            <th>Jumlah Item</th>
            <th>Harga</th>
            <th>Foto Item</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1 ?>
        @foreach ($barang as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->kode_barang }}</td>
            <td>{{ $data->nama_barang }}</td>
            <td>{{ $data->jenis_barang }}</td>
            <td>{{ $data->jumlah }}</td>
            <td>{{ $data->harga }}</td>
            <td><img src="{{ url('gambar/'.$data->gambar) }}" width="100px"></td>
            <td>
                <a href="/barang/detail/{{ $data->id_barang }}" class="btn btn-sm btn-success">Detail</a>
                <a href="/barang/edit/{{ $data->id_barang }}" class="btn btn-sm btn-warning">Edit</a>
                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_barang }}">
                    Delete
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@foreach ($barang as $data)


<div class="modal fade" id="delete{{ $data->id_barang }}">
    <div class="modal-dialog modal-sm">
        <div class="modal-content bg-danger">
            <div class="modal-header">
                <h4 class="modal-title">{{ $data->nama_barang }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda Yakin Ingin Menghapus Data Ini?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
                <a href="/barang/delete/{{ $data->id_barang }}" class="btn btn-outline-light">Yes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endforeach
@endsection