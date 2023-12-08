@extends('master.header')

@section('link')
<link rel="stylesheet" href="css/user.css">
@endsection

@section('title')
Data Anak
@endsection

@section('isi')


<div class="dropdown" style="display: flex; justify-content: flex-end; align-items: center; margin-left: auto;">
    <a href="#" type="button" class="btn-filter" data-bs-toggle="modal" data-bs-target="#exampleModal-1">
        <i class="fi fi-rr-filter"></i> Filter Data Anak
    </a>

    <div class="modal fade" id="exampleModal-1" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Filter Data Anak</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <div style="display: flex; justify-content: space-between;">
                        <div class="formbold-mb-3">
                            <label class="formbold-form-label">Kelompok Umur</label>

                            <select class="formbold-form-input" name="Puskesmas" id="puskesmas">
                                <option value="Pilih Desa">--Pilih Desa--</option>
                                <option value="Puskesmas1">Puskesmas 1</option>
                                <option value="Puskesmas2">Puskesmas 2</option>
                                <option value="Puskesmas3">Puskesmas 3</option>
                            </select>
                        </div>

                        <div class="formbold-mb-3">
                            <label class="formbold-form-label">Jenis Anak</label>

                            <select class="formbold-form-input" name="Puskesmas" id="puskesmas">
                                <option value="Pilih Desa">--Pilih Desa--</option>
                                <option value="Puskesmas1">Puskesmas 1</option>
                                <option value="Puskesmas2">Puskesmas 2</option>
                                <option value="Puskesmas3">Puskesmas 3</option>
                            </select>
                        </div>
                    </div>

                    <div style="display: flex; justify-content: space-between;">
                        <div class="formbold-mb-3">
                            <label class="formbold-form-label">Posyandu</label>

                            <select class="formbold-form-input" name="Puskesmas" id="puskesmas">
                                <option value="Pilih Desa">--Pilih Desa--</option>
                                <option value="Puskesmas1">Puskesmas 1</option>
                                <option value="Puskesmas2">Puskesmas 2</option>
                                <option value="Puskesmas3">Puskesmas 3</option>
                            </select>
                        </div>

                        <div class="formbold-mb-3">
                            <label class="formbold-form-label">Status Anak</label>

                            <select class="formbold-form-input" name="Puskesmas" id="puskesmas">
                                <option value="Pilih Desa">--Pilih Desa--</option>
                                <option value="Puskesmas1">Puskesmas 1</option>
                                <option value="Puskesmas2">Puskesmas 2</option>
                                <option value="Puskesmas3">Puskesmas 3</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Terapkan</button>
                </div>
            </div>
        </div>
    </div>

    <a href="#" type="button" class="btn-exp">
        <i class="fi fi-rr-file-export"></i> Export Data 
    </a>
</div>

<div class="main-container">
      <div class="dropdown" style="display: flex; justify-content: space-between; align-items: center;">
        <h3 class="title-container">Data Balita</h3>
      </div>
    
      <div class="table-container">

          <table id="example" class="table table-striped" style="width:100%">
              <thead>
                  <tr>
                      <th style="text-align: center;">No.</th>
                      <th style="text-align: center;">Akte</th>
                      <th style="text-align: center;">No. KK</th>
                      <th style="text-align: center;">Nama</th>
                      <th style="text-align: center;">Tgl Lahir</th>
                      <th style="text-align: center;">Umur</th>
                      <th style="text-align: center;">Jenis Kelamin</th>
                      <th style="text-align: center;">Nama Ibu</th>
                      <th style="text-align: center;">Nama Ayah</th>
                      <th style="text-align: center;">Gakin</th>
                      <th style="text-align: center;">Posyandu</th>
                      <th style="text-align: center;">RT</th>
                      <th style="text-align: center;">RW</th>
                      <th style="text-align: center;">Dusun</th>
                      <th style="text-align: center;">Desa</th>
                      <th style="text-align: center;">TB Terakhir</th>
                      <th style="text-align: center;">BB Terakhir</th>
                      <th style="text-align: center;">Tgl Timbang</th>
                      <th style="text-align: center;">Stunting</th>
                      <th style="text-align: center;">IDL</th>
                      <th style="text-align: center;">BADUTA</th>
                      <th style="text-align: center;">BBU</th>
                      <th style="text-align: center;">TBU</th>
                      <th style="text-align: center;">BBTB</th>
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
                                  <!-- Ikon pertama menjadi merah -->
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
                      targets: [24],
                      orderable: false
                  } // Kolom 10, 11, dan 16 tidak dapat di-sorting
              ]
          });
      });
  </script>

@endsection



