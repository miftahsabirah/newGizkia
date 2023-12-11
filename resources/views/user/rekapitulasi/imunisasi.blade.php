@extends('master.header')

@section('link')
<link rel="stylesheet" href="css/user.css">
@endsection

@section('title')
Rekapitulasi Data Imunisasi
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
        <h3 class="title-container">Rekapitulasi Data Imunisasi</h3>
      </div>
    
        <div class="table-container">
            
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                    <th style="text-align: center;">Kode</th>
                    <th style="text-align: center;">Puskesmas</th>
                    <th style="text-align: center;">Hepatitis 0</th>
                    <th style="text-align: center;">BCG</th>
                    <th style="text-align: center;">DPT 1</th>
                    <th style="text-align: center;">DPT 2</th>
                    <th style="text-align: center;">DPT 3</th>
                    <th style="text-align: center;">Polio 1</th>
                    <th style="text-align: center;">Polio 2</th>
                    <th style="text-align: center;">Polio 3</th>
                    <th style="text-align: center;">Polio 4</th>
                    <th style="text-align: center;">IPV</th>
                    <th style="text-align: center;">Campak</th>
                    <th style="text-align: center;">Booster Pentavalen</th>
                    <th style="text-align: center;">Booster Campak</th>
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
      $(document).ready(function() {
          $('#example').DataTable({
              columnDefs: [{
                      targets: [14],
                      orderable: false
                  } // Kolom 10, 11, dan 16 tidak dapat di-sorting
              ]
          });
      });
  </script>

@endsection



