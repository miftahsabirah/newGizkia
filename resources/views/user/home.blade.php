@extends('master.header')

@section('link')
<link rel="stylesheet" href="css/user.css">

@endsection

@section('title')
Home
@endsection

@section('isi')

<div class="row g-2 mx-auto" style="width: 80%">
    <div class="col-sm-7 order-sm-1 text-center">
        <h1 class="big-text"><b><span style="color: #2563EB;">Welcome</span> to Gizkia</b></h1>
        <h1><b>We Help You Anything</b></h1>
    </div>

    <div class="col-sm order-sm-2">
        <img src="img/home.png" alt="" class="img-fluid">
    </div>
</div>

<div class="home-container justify-content-between">
      <div class="col-home">
          <div class="count-container">
              <div class="icon"><img src="img/village.png"></div>
              <div class="dynamic-number" id="counter1">0</div>
          </div>
          <div class="caption">Total Kecamatan</div>
      </div>

      <div class="col-home">
          <div class="count-container">
              <div class="icon"><img src="img/pregnant.png"></div>
              <div class="dynamic-number" id="counter2">0</div>
          </div>
          <div class="caption">Total Bumil Risti</div>    
      </div>

      <div class="col-home">
          <div class="count-container">
              <div class="icon"><img src="img/BabyFeet.png"></div>
              <div class="dynamic-number" id="counter3">0</div>
          </div>
          <div class="caption">Total Anak Lahir</div>    
        </div>

      <div class="col-home">
          <div class="count-container">
              <div class="icon"><img src="img/trust.png"></div>
              <div class="dynamic-number" id="counter4">0</div>
          </div>
          <div class="caption">Imunisasi Diberikan</div>    
      </div>
</div>

<div class="pink-bg">
  <div class="card-home-container">
    <div class="card card-home">
      <img width="96" height="96" src="https://img.icons8.com/material-rounded/96/ffffff/pie-chart.png" alt="pie-chart"/>        
      <div class="text-card-home"><b>Data Dasar</b></div>
      <span class="arrow"><i class="fi fi-rr-arrow-small-right"></i></span>
    </div>

    <div class="card card-home">
      <img width="96" height="96" src="https://img.icons8.com/material-rounded/96/ffffff/pregnant.png" alt="pregnant"/>    
      <div class="text-card-home"><b>Data Anak</b></div>
      <span class="arrow"><i class="fi fi-rr-arrow-small-right"></i></span>
    </div>

    <div class="card card-home">
      <img width="96" height="96" src="https://img.icons8.com/material/96/ffffff/pill--v1.png" alt="pill--v1"/>    
      <div class="text-card-home"><b>Data Imunisasi</b></div>
      <span class="arrow"><i class="fi fi-rr-arrow-small-right"></i></span>
    </div>
  </div>
</div>





<script>
    // Waktu animasi dalam milidetik
    const animationDuration = 500;

    // Hitung jumlah penambahan per langkah animasi
    const step = 5;

    // Hitung berapa kali perlu diupdate untuk mencapai total
    const steps = 200 / step;

    // Hitung interval waktu antar update
    const interval = animationDuration / steps;

    function updateNumber(counterId, total, currentNumber = 0) {
        currentNumber += step;

        // Jangan melebihi total
        if (currentNumber > total) {
            currentNumber = total;
        }

        // Perbarui elemen HTML dengan angka yang baru
        document.getElementById(counterId).innerText = currentNumber;

        // Periksa apakah mencapai total, jika belum, jalankan kembali
        if (currentNumber < total) {
            setTimeout(() => updateNumber(counterId, total, currentNumber), interval);
        }
    }

    // Jalankan fungsi updateNumber untuk setiap counter dengan nilai awal yang berbeda saat halaman web dimuat
    updateNumber('counter1', 264); // Initial value for counter1
    updateNumber('counter2', 739); // Initial value for counter2
    updateNumber('counter3', 630); // Initial value for counter3
    updateNumber('counter4', 178); // Initial value for counter4
</script>

@endsection
  


