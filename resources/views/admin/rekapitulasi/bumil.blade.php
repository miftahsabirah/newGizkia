@extends('master.layoutsAdmin')

@section('link')
<link rel="stylesheet" href="css/manajemenProfil.css">
@endsection

@section('title')
Rekapitulasi Bumil
@endsection


<!-- MAIN -->

@section('isi')




<div class="dropdown" style="display: flex; justify-content: space-between; align-items: center;">
    <a href="{{ route('formDataBalita') }}" type="button" class="add-data" style="margin-left: auto;">
      <i class="fi fi-rr-plus-small add-icon"></i> Tambah Rekap Bumil
    </a>
</div>


<div class="container">
    <div class="title-container">
        <h2>Rekapitulasi Ibu Hamil</h2>
    </div>
    <div class="table-container">
        <div class="table-container">
        
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                      <th style="text-align: center;">Kode</th>
                      <th style="text-align: center;">Puskesmas</th>
                      <th style="text-align: center;">Register</th>
                      <th style="text-align: center;">K1 Murni</th>
                      <th style="text-align: center;">Melahirkan</th>
                      <th style="text-align: center;">Abortus</th>
                      <th style="text-align: center;">Meninggal</th>
                      <th style="text-align: center;">Pindah</th>
                      <th style="text-align: center;">Periksa Hamil</th>
                      <th style="text-align: center;">Periksa K1</th>
                      <th style="text-align: center;">Periksa K2</th>
                      <th style="text-align: center;">Periksa K3</th>
                      <th style="text-align: center;">Periksa K4</th>
                      <th style="text-align: center;">Periksa Ulang</th>
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


