@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <div class="row">

  <div class="col-3 col-lg-4">
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{$transaksi}}</h3>

          <p>Jumlah Transaksi</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="/admin/transaksi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    
    <div class="col-3 col-lg-4">
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{$itemproduk}}</h3>
          <p>Jumlah Produk</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="/admin/produk" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-6 col-lg-4">
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{number_format($qty)}}</h3>

          <p>Total Qty Penjualan (m2)</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="/admin/transaksi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>

  </div>
  <!-- table produk baru -->
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Grafik Penjualan</h4>
        </div>
        <div class="card-body">
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
<div id="container"></div>
<p class="highcharts-description">
 </p>
 </figure>
 <script type="text/javascript">
    var cData = JSON.parse(`<?php echo $categories['chart_data'];?>`);
    var cQty = JSON.parse(`<?php echo $sum1;?>`);
  Highcharts.chart('container',
{
chart: {
  type: 'column'
},

title: {
    text: 'Grafik Penjualan Produk Batu Alam Periode Juli - Desember 2021'
},

subtitle: {
    text: 'Stone Depot - PT. D&W Internasional'
},

xAxis: {
  categories: ['Jul 21', 'Agu 21', 'Sep 21', 'Okt 21', 'Nov 21', 'Des 21']
},

yAxis: {
    title: {
        text: 'Qty (m2)'
    }
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},
plotOptions: {
  column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
},


series: [{
    name: 'Terramix',
    data: [33,40,45,48,42,31]
}, {
    name: 'Ubin Teraso Cetak - Cordon Blue',
    data: [80,68,112,58,67,70]
}, {
    name: 'Ubin Teraso Cetak - Coral Pink',
    data: [51,60,63,50,67,40]
}, {
    name: 'Ubin Teraso Cetak - Green Army',
    data: [28,75,88,35,68,65]
}, {
    name: 'Ubin Teraso Cetak - Black Casto',
    data: [40,88,90,80,75,50]
}],

responsive: {
    rules: [{
        condition: {
            maxWidth: 500
        },
        chartOptions: {
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
            }
        }
    }]
}

});
</script>
  
        </div>
      </div>
    </div>
  </div>

</div>
@endsection