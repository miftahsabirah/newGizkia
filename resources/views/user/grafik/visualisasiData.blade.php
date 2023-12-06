@extends('master.header')

@section('link')
<link rel="stylesheet" href="css/user.css">

<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- ApexCharts library -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

@endsection

@section('title')
Visualisasi Data
@endsection

@section('isi')

<div class="container-card">
  <div class="row justify-content-between">

    <!-- Card 1 -->
    <div class="col-md-2 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <p class="card-text">Data Ibu Hamil Gakin</p>
          <h5 class="card-title">90</h5>
          <h6 class="card-subtitle mb-2 text-muted">Orang</h6>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-2 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <p class="card-text">Data Imunisasi BCG</p>
          <h5 class="card-title">30</h5>
          <h6 class="card-subtitle mb-2 text-muted">Orang</h6>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-2 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <p class="card-text">Bumil Umum</p>
          <h5 class="card-title">90</h5>
          <h6 class="card-subtitle mb-2 text-muted">Orang</h6>
        </div>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col-md-2 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <p class="card-text">Imunisasi Polio 3</p>
          <h5 class="card-title">10</h5>
          <h6 class="card-subtitle mb-2 text-muted">Orang</h6>
        </div>
      </div>
    </div>

    <!-- Card 5 -->
    <div class="col-md-2 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <p class="card-text">Imunisasi Polio 3</p>
          <h5 class="card-title">10</h5>
          <h6 class="card-subtitle mb-2 text-muted">Orang</h6>
        </div>
      </div>
    </div>

  </div>
</div>


      
  {{-- buat barChart --}}
  
  <div class="table-pengaturan">
    <div class="d-flex justify-content-between mb-4">
      <h3 class="mt-1">Statistik Bayi Lahir Desa Klakah</h3>
  
      <select id="yearFilter" class="btn-table-dash">
        <option value="2011">2011</option>
        <option value="2012">2012</option>
        <!-- Add more options for other years as needed -->
      </select>
    </div>
  
    <div id="chart"></div>
  </div>
  
  <div class="row g-3 mt-1">
    <div class="col-sm-4 table-grid-3">
      <div id="lineChart"></div>
    </div>

    <div class="col-sm table-grid-3">
      <div id="horizontalChart"></div>
    </div>

    <div class="col-sm table-pengaturan">
      <div class="d-flex justify-content-between mb-4">
        <h5 class="mt-2" style="color: #757575"><b>Bumil Baru Daftar</b></h5>
    
        <select id="yearFilter" class="btn-table-dash">
          <option value="2011">2011</option>
          <option value="2012">2012</option>
          <!-- Add more options for other years as needed -->
        </select>
      </div>
      <div id="pieChart"></div>
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
        name: "Normal",
        data: [10, 20, 30, 40, 50, 40, 30, 20, 10, 5, 10, 20]
      },
      {
        name: "BPJS",
        data: [10, 81, 35, 51, 49, 20, 69, 91, 148, 32, 54, 76]
      },
      {
        name: "Risti",
        data: [5, 20, 68, 30, 25, 40, 80, 50, 45, 50, 47, 21]
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
      text: 'Ibu Hamil Kurun Waktu 1 Tahun',
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
  colors: ['#009262', '#029ACA', '#A614EB'],
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
        'Sep',
        'Okt',
        'Nov',
        'Des'
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

{{-- Horizontal Bar Chart --}}

<script>
var options = {
  series: [{
    data: [44, 55, 41]
  }],
  chart: {
    type: 'bar',
    height: 300
  },
  plotOptions: {
    bar: {
      horizontal: true,
      dataLabels: {
        position: 'top',
      },
      borderRadius: 15
    }
  },
  dataLabels: {
    enabled: true,
    offsetX: -6,
    offsetY: 0, // Menentukan posisi vertikal label terhadap batang
    style: {
      fontSize: '12px',  // Ukuran font
      fontFamily: 'Poppins, sans-serif',  // Ganti dengan font yang diinginkan
      colors: ['#fff']
    }
  },
  title: {
    text: 'Progres Ibu Hamil',
    align: 'left',
    style: {
      fontSize: '20px',  // Ukuran font judul
      fontFamily: 'Poppins, sans-serif',  // Ganti dengan font yang diinginkan
      color: '#757575'  // Warna font judul
    }
  },
  stroke: {
    show: true,
    width: 1,
    colors: ['#fff']
  },
  tooltip: {
    shared: true,
    intersect: false
  },
  xaxis: {
    categories: ['Sawit', 'Sambi', 'Selo'],
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
  fill: {
    type: 'gradient',
    gradient: {
      shade: 'light',
      type: 'horizontal',
      shadeIntensity: 0.5,
      gradientToColors: ['#000000'],
      inverseColors: false,
      opacityFrom: 1,
      opacityTo: 1,
      stops: [0, 80, 100],
    },
  },
};

var horizontalChart = new ApexCharts(document.querySelector("#horizontalChart"), options);
horizontalChart.render();

</script>

{{-- Pie Chart --}}
<script>
  var options = {
          series: [44, 55, 13],
          chart: {
          width: 380,
          type: 'pie',
        },
       
        labels: ['Gakin', 'Risti', 'Lainnya'],

        colors: ['#1352F1', '#6AD2FF', '#FCAABE'],
        
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
            legend: {
              position: 'bottom'
            }
          }
        }]
        };

        var pieChart = new ApexCharts(document.querySelector("#pieChart"), options);
        pieChart.render();
</script>


@endsection




