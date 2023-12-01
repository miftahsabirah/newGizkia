@extends('master.header')

@section('link')
<link rel="stylesheet" href="css/user.css">
@endsection

@section('title')
Data Ibu Melahirkan
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
        <h3 class="title-container">Data Ibu Melahirkan</h3>
      </div>
    
    

      <div class="table-container">

          <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                  <th style="text-align: center;">No. Index Bumil</th>
                  <th style="text-align: center;">Nama</th>
                  <th style="text-align: center;">Suami</th>
                  <th style="text-align: center;">Posyandu</th>
                  <th style="text-align: center;">RT</th>
                  <th style="text-align: center;">RW</th>
                  <th style="text-align: center;">Dusun</th>
                  <th style="text-align: center;">Desa</th>
                  <th style="text-align: center;">Tgl</th>
                  <th style="text-align: center;">Penolong</th>
                  <th style="text-align: center;">Cara Lahir</th>
                  <th style="text-align: center;">Kondisi Bayi</th>
                  <th style="text-align: center;">Kondisi Ibu</th>
                  <th style="text-align: center;">Konseling Pasca Salin</th>
                  <th style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>012345671</td>
                    <td>Resanti Dwi Cahyani</td>
                    <td>Doni Kurnia</td>                        
                    <td>Posyanduu</td>
                    <td>5</td>
                    <td>2</td>
                    <td>Klakah</td>
                    <td>Klakah</td>
                    <td>2011-04-25</td>
                    <td>Dipsi Lala</td>
                    <td>Normal</td>
                    <td>Sehat</td>
                    <td>Sehat</td>
                    <td>-</td>
                    <td>
                      <button class="icon-button">
                        <i class="fi fi-rr-edit" style="color: #624DE3;"></i> <!-- Ikon pertama menjadi merah -->
                      </button>
                      <span style="margin-right: 10px;"></span>
                      <button class="icon-button">
                        <i class="fi fi-rr-trash" style="color: #A30D11;"></i> <!-- Ikon kedua menjadi hijau -->
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
                { targets: [14], orderable: false }  // Kolom 10, 11, dan 16 tidak dapat di-sorting
            ]
        });
    });
  </script>
  
@endsection



