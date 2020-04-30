@extends('layouts.master')

@section('title')
    <title>K-POS</title>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-auto">
                @component('components.card')
                    <p class="m-0 p-0 text-center"> 12 Mar 2020 </p>
                @endcomponent
            </div>
            <div class="col"></div>
            <div class="col-auto">
                @component('components.card')
                    <p class="m-0 p-0 text-center float-right"> <i class="fa fa-filter"></i>Filter </p>
                @endcomponent
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="small-box bg-white">
                    <div class="inner">
                        <p class="font-weight-bold">Total Pendapatan</p>

                        <h3 class="text-success">70%<sup style="font-size: 20px">%</sup> <i class="fa fa-arrow-up"></i></h3>
                        
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars text-success"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col">
                <div class="small-box bg-white">
                    <div class="inner">
                        <p class="font-weight-bold">Total Keuntungan</p>

                        <h3 class="text-success">30%<sup style="font-size: 20px">%</sup> <i class="fa fa-arrow-up"></i></h3>
                        
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars text-success"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col">
                <div class="small-box bg-white">
                    <div class="inner">
                        <p class="font-weight-bold">Total Penjualan</p>

                        <h3 class="text-success">60%<sup style="font-size: 20px">%</sup> <i class="fa fa-arrow-up"></i></h3>
                        
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars text-success"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <!-- BAR CHART -->
                <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Bar Chart</h3>

                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart">
                    <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<!-- Chart JS -->
<script src="{{ asset('lte/plugins/chart.js/Chart.min.js') }}"></script>
<script>
    var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label               : 'Penjualan Offline',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label               : 'Penjualan Online',
          backgroundColor     : 'rgba(233, 212, 96, 1)',
          borderColor         : 'rgba(233, 212, 96, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }
    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = jQuery.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar', 
      data: barChartData,
      options: barChartOptions
    })
</script>
@endsection