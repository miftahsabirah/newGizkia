@extends('master.layoutsAdmin')

@section('link')
<link rel="stylesheet" href="css/manajemenProfil.css">
@endsection

@section('title')
Rekapitulasi Imunisasi
@endsection


<!-- MAIN -->

@section('isi')




<div class="dropdown" style="display: flex; justify-content: space-between; align-items: center;">
    <a href="{{ route('formDataBalita') }}" type="button" class="add-data" style="margin-left: auto;">
      <i class="fi fi-rr-plus-small add-icon"></i> Tambah Rekap Imunisasi
    </a>
</div>


<div class="container">
    <div class="title-container">
        <h2>Rekapitulasi Imunisasi</h2>
    </div>
    <div class="table-container">
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
  $(document).ready(function () {
      $('#example').DataTable({
          columnDefs: [
              { targets: [14], orderable: false }  // Kolom 10, 11, dan 16 tidak dapat di-sorting
          ]
      });
  });
</script>


@endsection


