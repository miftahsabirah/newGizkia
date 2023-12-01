@extends('master.header')

@section('link')
<link rel="stylesheet" href="css/user.css">
@endsection

@section('title')
Data Bumil
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
        <h3 class="title-container">Data Ibu Hamil Risti</h3>
      </div>
    
    

      <div class="table-container">

          <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                  <th style="text-align: center;">No. Register</th>
                  <th style="text-align: center;">Nama</th>
                  <th style="text-align: center;">Umur</th>
                  <th style="text-align: center;">Suami</th>
                  <th style="text-align: center;">Jenis</th>
                  <th style="text-align: center;">Gakin</th>
                  <th style="text-align: center;">Posyandu</th>
                  <th style="text-align: center;">RT</th>
                  <th style="text-align: center;">RW</th>
                  <th style="text-align: center;">Dusun</th>
                  <th style="text-align: center;">Desa</th>
                  <th style="text-align: center;">HTP</th>
                  <th style="text-align: center;">F1</th>
                  <th style="text-align: center;">F2</th>
                  <th style="text-align: center;">F3</th>
                  <th style="text-align: center;">F4</th>
                  <th style="text-align: center;">F5</th>
                  <th style="text-align: center;">F6</th>
                  <th style="text-align: center;">R1</th>
                  <th style="text-align: center;">R2</th>
                  <th style="text-align: center;">R3</th>
                  <th style="text-align: center;">R4</th>
                  <th style="text-align: center;">R5</th>
                  <th style="text-align: center;">R6</th>
                  <th style="text-align: center;">R7</th>
                  <th style="text-align: center;">R8</th>
                  <th style="text-align: center;">R9</th>
                  <th style="text-align: center;">R10</th>
                  <th style="text-align: center;">R11</th>
                  <th style="text-align: center;">R12</th>
                  <th style="text-align: center;">Jenis Risti</th>
                  <th style="text-align: center;">Rincian Risti</th>
                  <th style="text-align: center;">G</th>
                  <th style="text-align: center;">P</th>
                  <th style="text-align: center;">A</th>
                  <th style="text-align: center;">Lila</th>
                  <th style="text-align: center;">S. Akhir</th>
                  <th style="text-align: center;">D. Akhir</th>
                  <th style="text-align: center;">HB. Akhir</th>
                  <th style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>012345671</td>
                    <td>Resanti Dwi Cahyani</td>
                    <td>23 Tahun</td>
                    <td>Doni Kurnia</td>                        
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
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



