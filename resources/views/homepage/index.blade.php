@extends('layouts.template')
@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="{{ asset('images/slide2.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/slide4.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/slide5.jpg') }}" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  <!-- end carousel -->
  <!-- kategori produk -->
  <div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
      <h2 class="text-center">Kategori Produk</h2>
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
  <!-- produk Promo-->
  <div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
      <h2 class="text-center">Promo</h2>
    </div>
    <!-- produk pertama -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/lantai') }}">
          <img src="{{asset('images/produk-terasolantai.jpg') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('produk/satu') }}" class="text-decoration-none">
            <p class="card-text">
              Carriage White - Lantai Teraso
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
                <del>Rp. 335,000</del>
                <br />
                Rp. 310.000
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- produk kedua -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/gentong') }}">
          <img src="{{asset('images/produk-terasogentong.jpg') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('produk/gentong') }}" class="text-decoration-none">
            <p class="card-text">
              Bak Mandi Gentong Teraso - Grey
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
                <del>Rp. 2,250.000</del>
                <br />
                Rp. 2,100.000
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- produk ketiga -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/wastafel') }}">
          <img src="{{asset('images/produk-terasowastafel.jpg') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('produk/wastafel') }}" class="text-decoration-none">
            <p class="card-text">
              Wastafel Teraso Resin
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
                <del>Rp. 2,500,000</del>
                <br />
                Rp. 2,350.000
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end produk promo -->
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
  <!-- tentang toko -->
  <hr>
  <div class="row mt-4">
    <div class="col">
      <h5 class="text-center">Tentang Kami</h5>
       <p><br>
       <div class="embed-responsive embed-responsive-16by9">
         <iframe width="560" height="315" src="https://www.youtube.com/embed/YEL1PGikeR4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
             </p>
      <p><br>
       Terramix merupakan official brand dari PT. D&W Internasional / Stone Depot. Terramix memproduksi material teraso dengan berbagai varian output yang dihasilkan seperti ubin teraso cetak, bahan teraso cor instan, dan teraso resin.
      </p>
      <p>
        Pabrik teraso produksi Terramix berlokasi di daerah Jawa Timur. Sedangkan untuk second factory dari Terramix terdapat di Lengkong Wetan, Majalengka, Jawa Barat.

        Saat ini, Terramix memiliki representative office di dua wilayah, yakni Cirebon dan Bali. Untuk kantor pusat dari Terramix terletak di Cirebon, Jawa Barat. Sedangkan second office dari Terramix terletak di daerah Jimbaran, Bali.
      </p><br>
      <p class="text-center">
        <a href="" class="btn btn-outline-secondary">
          Baca Selengkapnya
        </a>      
      </p>
    </div>
  </div>
  <!-- end tentang toko -->
    </div>
  </div>
</div>
@endsection