@extends('master.header')

@section('link')
<link rel="stylesheet" href="css/user.css">
@endsection

@section('title')
Rekapitulasi Data Anak
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
        <h3 class="title-container">Rekapitulasi Data Anak</h3>
      </div>
    
    

      <div class="table-container">

            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th rowspan="2" class="th2">Kode</th>  
                        <th rowspan="2" class="th2">Puskesmas</th>                                              
                        <th colspan="3" class="th2">Register</th>                                              
                        <th colspan="3" class="th2">Kelahiran</th>                                              
                        <th colspan="3" class="th2">Meninggal</th>                                              
                        <th rowspan="2" class="th2">KN1</th>  
                        <th rowspan="2" class="th2">KN2</th>  
                        <th rowspan="2" class="th2">KN3</th>  
                        <th rowspan="2" class="th2">Opsi</th>  
                    </tr>
                    <tr>
                        {{-- untuk register --}}
                        <th class="th2">L</th>
                        <th class="th2">P</th>
                        <th class="th2">Total</th>
                        {{-- untuk kelahirah --}}
                        <th class="th2">L</th>
                        <th class="th2">P</th>
                        <th class="th2">Total</th>
                        {{-- untuk meninggal --}}
                        <th class="th2">L</th>
                        <th class="th2">P</th>
                        <th class="th2">Total</th>
                    </tr>
                </thead>
    
                <tbody>
                    <tr>
                        <td>012345678</td>
                        <td>Miftah Sabirah</td>
                        {{-- untuk puskesmas --}}
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        {{-- untuk kelahiran --}}
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        {{-- untuk kelahiran --}}
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
    
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



