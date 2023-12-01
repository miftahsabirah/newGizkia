@extends('master.header')

@section('link')
<link rel="stylesheet" href="css/user.css">
@endsection

@section('title')
Data Imunisasi
@endsection

@section('isi')


<div class="dropdown" style="display: flex; justify-content: flex-end; align-items: center; margin-left: auto;">
    <a href="#" type="button" class="btn-filter">
        <i class="fi fi-rr-filter"></i> Filter Data
    </a>

    <a href="#" type="button" class="btn-exp">
        <i class="fi fi-rr-file-export"></i> Export Data 
    </a>
</div>

<div class="main-container">
      <div class="dropdown" style="display: flex; justify-content: space-between; align-items: center;">
        <h3 class="title-container">Data Imunisasi</h3>
      </div>
    
    

      <div class="table-container">

          <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                  <th style="text-align: center;">Tanggal</th>
                  <th style="text-align: center;">No. Index</th>
                  <th style="text-align: center;">Nama Bayi</th>
                  <th style="text-align: center;">Tgl Lahir</th>
                  <th style="text-align: center;">Jenis Kelamin</th>
                  <th style="text-align: center;">Posyandu</th>
                  <th style="text-align: center;">Dusun</th>
                  <th style="text-align: center;">Desa</th>
                  <th style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2023-11-09</td>                        
                    <td>1234567789</td>                        
                    <td>Muhammad Nur Huda</td>                        
                    <td>2008-09-08</td>                        
                    <td>Laki-Laki</td>                        
                    <td>-</td>                        
                    <td>-</td>                        
                    <td>-</td>                        
                    <td>
                      <button class="icon-button">
                        <i class="fi fi-rr-edit" style="color: #624DE3;"></i> <!-- Ikon pertama menjadi merah -->
                      </button>
                      
                    </td>
                  
                </tr>

            </tbody>
          </table>
      </div>
</div>
@endsection

@section('addScript')
<script>
  $(document).ready(function () {
      $('#example').DataTable({
          columnDefs: [
              { targets: [8], orderable: false }  // Kolom 10, 11, dan 16 tidak dapat di-sorting
          ]
      });
  });
</script>

<script>
    function terapkanPeriode() {
        // Mendapatkan nilai tanggal dari elemen input
        var periodeValue = document.getElementById('Periode').value;

        // Implementasikan logika terapkan tanggal di sini
        alert('Tanggal telah diterapkan: ' + periodeValue);
        // Tambahkan logika lain sesuai kebutuhan, misalnya kirim data ke server, dll.
    }
</script>

@endsection



