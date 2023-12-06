@extends('master.layoutsAdmin')

@section('link')
<link rel="stylesheet" href="css/manajemenProfil.css">

<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- ApexCharts library -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


@endsection

@section('title')
Dashboard
@endsection



@section('isi')

<div class="row g-2 dash-container">
  <div class="col-sm-8">
      
    <h3 class="title-dash">
      Selamat Datang di Gizkia
      <br>
      Dinas Kesehatan Kabupaten Boyolali, Jawa Tengah
    </h3>  
    
  </div>

  <div class="col-sm text-center">
    <img src="img/dashboard.png" alt="gambarAdmin" class="img-dash mx-auto">
  </div>

</div>
    
{{-- buat barChart --}}

<div class="table-pengaturan">
  <div class="d-flex justify-content-between mb-4">
    <h3>Statistik Bayi Lahir di Boyolali</h3>

    <select id="yearFilter" class="btn-table-dash">
      <option value="2011">2011</option>
      <option value="2012">2012</option>
      <!-- Add more options for other years as needed -->
    </select>
  </div>

  <div id="chart"></div>
</div>

<div class="row g-2 mt-1">
  <div class="col-sm-6 table-pengaturan">
    <div id="lineChart"></div>
  </div>

  <div class="col-sm dash-table">
    <h6>Data Terbaru</h6>
    <table id="example" class="table table-striped" style="width:100%">
      <thead>
          <tr>
              <th style="text-align: center;">Aktivitas Terbaru</th>
              <th style="text-align: center;">Halaman</th>
              <th style="text-align: center;">Terakhir</th>
          </tr>
      </thead>
      <tbody>
              <tr>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  
              </tr>
              <tr>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                
              </tr>
              <tr>
                <td>---</td>
                <td>---</td>
                <td>---</td>
              
              </tr>
      </tbody>
  </table>    
  </div>

</div>




 {{-- BAR CHART --}}
<script>
var options = {
  series: [
    {
      name: 'Laki-laki',
      data: [44, 55, 41, 67, 22, 43, 44, 55, 41, 67, 22, 43]
    },
    {
      name: 'Perempuan',
      data: [13, 23, 20, 8, 13, 27, 44, 55, 41, 67, 22, 43]
    }
  ],
  chart: {
    type: 'bar',
    height: 350,
    stacked: true,
    toolbar: {
      show: true
    },
    zoom: {
      enabled: true
    }
  },
  responsive: [
    {
      breakpoint: 480,
      options: {
        legend: {
          position: 'bottom',
          offsetX: -10,
          offsetY: 0
        }
      }
    }
  ],
  plotOptions: {
    bar: {
      horizontal: false,
      borderRadius: 15,
      dataLabels: {
        total: {
          enabled: true,
          style: {
            fontSize: '13px',
            fontWeight: 900
          }
        }
      },
      columnWidth: '50%', // Mengatur lebar batang
    }
  },
  colors: ['#AEE2FF', '#FCAABE'], // Ganti warna batang sesuai kebutuhan
  xaxis: {
    categories: [
      'Januari',
      'Februari',
      'Maret',
      'April',
      'Mei',
      'Juni',
      'Juli',
      'Agustus',
      'September',
      'Oktober',
      'November',
      'Desember'
    ],
    labels: {
      style: {
        fontSize: '12px',  // Ukuran font
        fontFamily: 'Poppins, sans-serif',  // Ganti dengan font yang diinginkan
        color: '#E0E0E0'
      }
    }
  },
  yaxis: {
    labels: {
      style: {
        fontSize: '12px',  // Ukuran font
        fontFamily: 'Poppins, sans-serif',  // Ganti dengan font yang diinginkan
        color: '#E0E0E0'      }
    }
  },
  legend: {
    position: 'top', // Mengatur posisi legenda ke atas chart
    offsetY: 10,
    fontSize: '14px', // Ukuran font legenda
    fontFamily: 'Poppins, sans-serif',  // Ganti dengan font yang diinginkan
    color: '#E0E0E0'  
  },
  fill: {
    opacity: 1
  }
};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();
 
</script>

{{-- LINE CHART --}}
<script>
var lineChartOptions = {
  series: [
    {
      name: "Bumil Gakin",
      data: [10, 81, 35, 51, 49, 20, 69, 91, 148]
    },
    {
      name: "Ibu Melahirkan",
      data: [5, 20, 68, 30, 25, 40, 80, 50, 45]
    }
  ],
  chart: {
    height: 350,
    type: 'line',
    zoom: {
      enabled: false
    }
  },
  dataLabels: {
    enabled: false
  },
  title: {
    text: 'Kategori Ibu Hamil Terbaru',
    align: 'left',
    style: {
      fontSize: '20px',  // Ukuran font judul
      fontFamily: 'Poppins, sans-serif',  // Ganti dengan font yang diinginkan
      color: '#757575'  // Warna font judul
    }
  },
  grid: {
    row: {
      colors: ['#f3f3f3', 'transparent'],
      opacity: 0.5
    },
  },
  stroke: {
  curve: 'smooth',
},
colors: ['#876AFE', '#FFBC02'],
  xaxis: {
    categories: [
      'Jan', 
      'Feb', 
      'Mar', 
      'Apr', 
      'May', 
      'Jun', 
      'Jul', 
      'Aug', 
      'Sep'
    ],
    labels: {
      style: {
        fontSize: '12px',  // Ukuran font
        fontFamily: 'Poppins, sans-serif',  // Ganti dengan font yang diinginkan
        color: '#E0E0E0'
      }
    }
  },

  yaxis: {
    labels: {
      style: {
        fontSize: '12px',  // Ukuran font
        fontFamily: 'Poppins, sans-serif',  // Ganti dengan font yang diinginkan
        color: '#E0E0E0'      
      }
    }
  },
  
  legend: {
    position: 'top', // Mengatur posisi legenda ke atas chart
    offsetY: -10,
    fontSize: '14px', // Ukuran font legenda
    fontFamily: 'Poppins, sans-serif',  // Ganti dengan font yang diinginkan
    colors: ['#000000', '#000000'],
    style: {
        color: '#000000'      
      }

  },
};

var lineChart = new ApexCharts(document.querySelector("#lineChart"), lineChartOptions);
lineChart.render();
</script>


@endsection