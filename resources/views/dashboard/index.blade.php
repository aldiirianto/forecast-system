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
    text: 'Grafik Penjualan Produk Batu Alam Periode Januari - Juni 2020'
},

subtitle: {
    text: 'Stone Depot - PT. D&W Internasional'
},

xAxis: {
  categories: ['Jan 20', 'Feb 20', 'Mar 20', 'Apr 20', 'Mei 20', 'Jun 20']
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
    data: [70,202,155,40,145]
}, {
    name: 'Ubin Teraso Cetak - Cordon Blue',
    data: [55,15,25,25,80,50]
}, {
    name: 'Ubin Teraso Cetak - Orange Classic',
    data: [85,35,42,25,25]
}, {
    name: 'Ubin Teraso Cetak - Coral Pink',
    data: [0,25,15,23,10,15]
}, {
    name: 'Ubin Teraso Cetak - Green Army',
    data: [25,80,50,15,5,25]
}, {
    name: 'Ubin Teraso Cetak - Black Casto',
    data: [100,45,25,56,15,100]
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