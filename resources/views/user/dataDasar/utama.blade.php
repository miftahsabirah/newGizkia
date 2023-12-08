@extends('master.header')

@section('link')
<link rel="stylesheet" href="css/user.css">
@endsection

@section('title')
Data Dasar
@endsection

@section('isi')

<div class="row row-cols-1 row-cols-md-3 g-5 m-4">
    <div class="col">
      <div class="card h-100">
        <img src="img/card1.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title p-1">Restore Data</h5>
          <p class="card-text p-1">Anda dapat mengembalikan seluruh data yang telah diedit. Terdapat beberapa pilihan data seperti data bumil, data balita, data imunisasi, dan rekapitulasi data.</p>
          <div class="d-grid gap-2">
            <a class="btn btn-card" type="button" href="#"><b>Lihat Halaman</b></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100">
        <img src="img/card2.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title p-1">Puskesmas</h5>
          <p class="card-text p-1">Anda dapat melihat seluruh data pusksesmas yang terdiri dari kelurahan, petugas medis, dan posyandu. Anda juga dapat mengunduh data tersebut</p>
          <div class="d-grid gap-2">
            <a class="btn btn-card" type="button" href="#"><b>Lihat Halaman</b></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100">
        <img src="img/card3.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title p-1">Backup Data</h5>
          <p class="card-text p-1">Anda dapat melakukan backup data tertentu dengan cara mengunduh data sesuai dengan pilihan yang tertera. Data tersebut antara lain data balita, data bumil, data imunisasi.</p>
          <div class="d-grid gap-2">
            <a class="btn btn-card" type="button" href="#"><b>Lihat Halaman</b></a>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection