@extends('master.header')

@section('link')
<link rel="stylesheet" href="css/user.css">

@endsection

@section('title')
Grafik Data Imunisasi
@endsection

@section('isi')


<div class="container-chart">

    <div class="d-flex justify-content-between mb-4">
        <h3 class="mt-1" style="margin-left: 20px;">Grafik Data Imunisasi</h3>
    
        <select id="puskesmasFilter" class="btn-table-grafik">
            <option value="Puskesmas1">Puskesmas 1</option>
            <option value="Puskesmas2">Puskesmas 2</option>
            <option value="Puskesmas3">Puskesmas 3</option>
          </select>
      </div>

    <div id="chart"></div>
</div>

@endsection

@section('addScript')
{{-- javascript untuk chart --}}
<script>
     var options = {
        series: [{
            name: 'IUmunisasi',
            data: [44, 55, 57, 56, 61, 58, 63, 60, 66, 20, 34]
        }],
        chart: {
            type: 'bar',
            height: 400
        },
        plotOptions: {
            bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        xaxis: {
            categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Des'],
            axisBorder: {
            show: true, // Menyembunyikan garis pada sumbu x
            },
            labels: {
                style: {
                    fontFamily: 'Poppins, sans-serif', // Ganti dengan font yang diinginkan
                }
            }
        },
        yaxis: {
            axisBorder: {
            show: true, // Menyembunyikan garis pada sumbu y
            },
            labels: {
                style: {
                    fontFamily: 'Poppins, sans-serif', // Ganti dengan font yang diinginkan
                }
            }
        },
        fill: {
            opacity: 1,
            colors: ['#861657'] ,
        },
        tooltip: {
            y: {
            formatter: function (val) {
                return val + " Imunisasi"
            }
            }
        },
        grid: {
            show: false, // Menyembunyikan garis grid
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();

</script>
@endsection