@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col">
    <div class="card">
        <div class="card-header">Grafik Penjualan Bulanan</div>
        <div class="card-body">
          <div id="grafik"></div>
        </div>
    </div>
  </div>
</div>
<script types="https://code.highcharts.com/highcharts.js"></script>
<script types="text/javascript">
    // var penjualan = <?php echo json_encode($total_qty) ?>;
    // var bulan = <?php echo json_encode($bulan) ?>;
    // Highcharts.chart('grafik', {
    //     title: {
    //         text: 'Grafik Penjualan Bulanan'
    //     },
    //     xAxis : {
    //         categories : bulan
    //     },
    //     yAxis : {
    //         title: {
    //             text : Jumlah Penjualan Bulanan
    //         }
    //     },
    //     plotOptions: {
    //         series: {
    //             allowPointSelecct: true
    //         }
    //     },
    //     series: [
    //     {
    //         name: 'Jumlah Penjualan',
    //         data: penjualan
    //     }
    //     ]
    // })
@endsection