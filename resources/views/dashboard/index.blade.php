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
          <h3>{{$qty}}</h3>

          <p>Qty Penjualan</p>
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
    text: 'Grafik Penjualan Produk Batu Alam Stone Depot'
},

subtitle: {
    text: 'Stone Depot - PT. D&W Internasional'
},

xAxis: {
    type: 'datetime'
},

yAxis: {
    title: {
        text: 'Qty'
    }
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        pointStart: Date.UTC(2020, 0, 1),
        pointInterval: 31 * 24 * 3600 * 1000 // one MONTH
    }
},


series: [{
    name: cData[0],
    data: [100,20,10]
}, {
    name: cData[1],
    data: [200,80,60]
}, {
    name: cData[2],
    data: [20,50,80]
}, {
    name: cData[3],
    data: [20,10,30]
}, {
    name: cData[4],
    data: [100,60,10]
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