@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <a href="#" style="align-left"class="btn btn-sm btn-primary">
                    Perhitungan
                    </a>
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


                    Highcharts.chart('container',
                    {
                    chart: {
                    type: 'column'
                    },

                    title: {
                        text: 'Grafik Prediksi Penjualan Produk Batu Alam Periode July - Desember 2020'
                    },

                    subtitle: {
                        text: 'Stone Depot - PT. D&W Internasional'
                    },

                    xAxis: {
                    categories: ['Jul 20', 'Aug 20', 'Sep 20', 'Okt 20', 'Nov 20', 'Des 20']
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
<!-- <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Grafik Prediksi Penjualan</h4>
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


  Highcharts.chart('container',
{
chart: {
  type: 'column'
},

title: {
    text: 'Grafik Prediksi Penjualan Produk Batu Alam Periode July - Desember 2020'
},

subtitle: {
    text: 'Stone Depot - PT. D&W Internasional'
},

xAxis: {
  categories: ['Jul 20', 'Aug 20', 'Sep 20', 'Okt 20', 'Nov 20', 'Des 20']
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
</div> -->
@endsection