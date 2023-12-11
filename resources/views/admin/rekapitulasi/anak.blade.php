@extends('master.layoutsAdmin')

@section('link')
<link rel="stylesheet" href="css/manajemenProfil.css">
@endsection

@section('title')
Rekapitulasi Anak
@endsection


<!-- MAIN -->

@section('isi')
<div class="container">
    <div class="title-container">
        <h2>Rekapitulasi Anak</h2>
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
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable({
            columnDefs: [
                { targets: [14], orderable: false }  
            ]
        });
    });
  </script>
@endsection