@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-6 col-lg-3">
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>Rp.50.000.000</h3>

          <p>Profit Pendapatan</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-6 col-lg-3">
      <div class="small-box bg-info">
        <div class="inner">
          <h3>6</h3>

          <p>Jumlah Produk</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-6 col-lg-3">
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>1324</h3>

          <p>Qty Penjualan</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-6 col-lg-3">
      <div class="small-box bg-success">
        <div class="inner">
          <h3>100</h3>

          <p>Transaksi</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>
  <!-- table produk baru -->
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Produk Baru</h4>
          <div class="card-tools">
            <a href="#" class="btn btn-sm btn-primary">
              More
            </a>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Tahun</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Qty</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>2022</td>
                <td>Ubin Teraso - Black Casto</td>
                <td>Ubin Teraso Cetak</td>
                <td>340</td>
                <td>Rp.32.400.000</td>
              </tr>
              <tr>
                <td>2</td>
                <td>2022</td>
                <td>Terramix</td>
                <td>Teraso Cor Instant</td>
                <td>223</td>
                <td>Rp.27.400.000</td>
              </tr>
              <tr>
                <td>3</td>
                <td>2022</td>
                <td>Ubin Teraso Cetak - Green Army</td>
                <td>Ubin Teraso Cetak</td>
                <td>207</td>
                <td>Rp.23.332.000</td>
              </tr>
              <tr>
                <td>4</td>
                <td>2022</td>
                <td>Ubin Teraso Cetak - Coral Pink</td>
                <td>Ubin Teraso Cetak</td>
                <td>210</td>
                <td>Rp.23.400.000</td>
              </tr>
              <tr>
                <td>5</td>
                <td>2022</td>
                <td>Ubin Teraso Cetak - Orange Classic</td>
                <td>Ubin Teraso Cetak</td>
                <td>120</td>
                <td>Rp.20.400.000</td>
              </tr>
              <tr>
                <td>6</td>
                <td>2022</td>
                <td>Ubin Teraso Cetak - Cordon Blue</td>
                <td>Ubin Teraso Cetak</td>
                <td>140</td>
                <td>Rp.17.400.000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
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
  Highcharts.chart('container', {

title: {
    text: 'Grafik Penjualan Produk StoneDepot'
},

subtitle: {
    text: 'Source: thesolarfoundation.com'
},

yAxis: {
    title: {
        text: 'Qty'
    }
},

xAxis: {
    accessibility: {
        rangeDescription: 'Range: January to December'
    }
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        },
        pointStart: 2015
    }
},

series: [{
    name: 'Ubin Teraso Black Casto',
    data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
}, {
    name: 'Terramix',
    data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
}, {
    name: 'Green Army',
    data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
}, {
    name: 'Orange Classic',
    data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
}, {
    name: 'Cordon Blue',
    data: [12908, 5948, 8105, 11248, 8989, 11816, 18274, 18111]
}, {
    name: 'Coral Pink',
    data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
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
@endsection