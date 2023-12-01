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
        <h3 class="title-container">Data Ibu Hamil</h3>
      </div>
    
    

      <div class="table-container">

          <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th style="text-align: center;">No. Index</th>
                    <th style="text-align: center;">Tgl Reg</th>
                    <th style="text-align: center;">Nama</th>
                    <th style="text-align: center;">Tgl Lahir</th>
                    <th style="text-align: center;">BB Awal</th>
                    <th style="text-align: center;">Umur</th>
                    <th style="text-align: center;">Umur Hamil</th>
                    <th style="text-align: center;">Umur Kehamilan Sekarang</th>
                    <th style="text-align: center;">Suami</th>
                    <th style="text-align: center;">No. Telp</th>
                    <th style="text-align: center;">No. Telp Suami</th>
                    <th style="text-align: center;">HTP</th>
                    <th style="text-align: center;">Desa</th>
                    <th style="text-align: center;">Puskesmas</th>
                    <th style="text-align: center;">Kecamatan</th>
                    <th style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                            <button class="icon-button">
                                <i class="fi fi-rr-edit" style="color: #624DE3;"></i>
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
    $(document).ready(function() {
        $('#example').DataTable({
            columnDefs: [{
                    targets: [9, 10, 15],
                    orderable: false
                } // Kolom 10, 11, dan 16 tidak dapat di-sorting
            ]
        });
    });
</script>

@endsection



