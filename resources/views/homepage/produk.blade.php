@extends('layouts.template')
@section('content')
<div class="container">
  <!-- kategori produk -->
  <div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
    	<h2 class="text-center">Produk</h2>
    </div>
    <!-- kategori pertama -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('kategori/lantai') }}">
          <img src="{{asset('images/produk-terasolantai.jpg') }}" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('kategori/lantai') }}" class="text-decoration-none">
            <p class="card-text">Lantai Teraso</p>
          </a>
        </div>
      </div>
    </div>
    <!-- kategori kedua -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('kategori/gentong') }}">
          <img src="{{asset('images/produk-terasogentong.jpg') }}" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('kategori/gentong') }}" class="text-decoration-none">
            <p class="card-text">Gentong Teraso</p>
          </a>
        </div>
      </div>
    </div>
    <!-- kategori ketiga -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('kategori/wastafel') }}">
          <img src="{{asset('images/produk-terasowastafel.jpg') }}" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('kategori/wastafel') }}" class="text-decoration-none">
            <p class="card-text">Wastafel Teraso</p>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- end kategori produk -->
  <!-- produk Terbaru-->
  <div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
      <h2 class="text-center">New Products</h2>
    </div>
    <!-- produk pertama -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/lantaiteraso/blackorange') }}">
          <img src="{{asset('images/terbaru-blackorange.jpg') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('produk/lantaiteraso/blackorange') }}" class="text-decoration-none">
            <p class="card-text">
              Black Orange - Lantai Teraso
            </p>
          </a>
          <div class="row mt-4">
            <div class="col">
              <button class="btn btn-light">
                <i class="far fa-heart"></i>
              </button>
            </div>
            <div class="col-auto">
              <p>
                Rp. 390.000,00
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- produk kedua -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/lantaiteraso/orangeclassic') }}">
          <img src="{{asset('images/terbaru-orangeclassic.jpg') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('produk/lantaiteraso/orangeclassic') }}" class="text-decoration-none">
            <p class="card-text">
              Orange Classic - Lantai Teraso
            </p>
          </a>
          <div class="row mt-4">
            <div class="col">
              <button class="btn btn-light">
                <i class="far fa-heart"></i>
              </button>
            </div>
            <div class="col-auto">
              <p>
                Rp. 310.000,00
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- produk ketiga -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/lantaiteraso/tropicalgreen') }}">
          <img src="{{asset('images/terbaru-tropicalgreen.jpg') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('produk/lantaiteraso/tropicalgreen') }}" class="text-decoration-none">
            <p class="card-text">
              Tropical Green - Lantai Teraso
            </p>
          </a>
          <div class="row mt-4">
            <div class="col">
              <button class="btn btn-light">
                <i class="far fa-heart"></i>
              </button>
            </div>
            <div class="col-auto">
              <p>
                Rp. 330.000,00
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end produk terbaru -->
  </div>
@endsection