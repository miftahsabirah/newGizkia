@extends('master.layoutsAdmin')

@section('link')
<link rel="stylesheet" href="css/manajemenProfil.css">
@endsection

@section('title')
Manajemen Akses
@endsection

@section('isi')

    <div class="main-container">
        <div class="title-container rounded-top border-bottom">
            <h2>Manajemen Akses</h2>
        </div>
        <div class="table-container">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                      <th style="text-align: center;">NIP</th>
                      <th style="text-align: center;">Nama</th>
                      <th style="text-align: center;">Puskesmas</th>
                      <th style="text-align: center;">Tanggal Lahir</th>
                      <th style="text-align: center;">Jabatan</th>
                      <th style="text-align: center;">Username</th>
                      <th style="text-align: center;">Status</th>
                      <th style="text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>012345671</td>
                        <td>
                          <div class="profile">
                              <img src="img/bgRegisterLogin.png" alt="Profile Image">
                              Miftah Sabirah
                          </div>
                        </td>                        
                        <td>Edinburgh</td>
                        <td>2011-04-25</td>
                        <td>2011-04-25</td>
                        <td>$320,800</td>
                        <td><span class="badge rounded-pill bg-success">Terima</span></td>
                        <td>
                          <button type="button" class="icon-button" data-bs-toggle="modal" data-bs-target="#exampleModal-Decline">
                              <i class="fi fi-rr-square-x" style="color: red;"></i>
                          </button>
                          <span style="margin-right: 10px;"></span>
                          <button type="button" class="icon-button" data-bs-toggle="modal" data-bs-target="#exampleModal-Accept">
                            <i class="fi fi-rr-checkbox" style="color: green;"></i>
                          </button>
                        </td>
                      
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

{{-- untuk modal decline --}}
<div class="modal fade" id="exampleModal-Decline" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
              <h5 class="modal-title" id="exampleModalLabel">Tolak</h5>
            </div>
            <div class="modal-body">
                <div class="formbold-mb-3 d-flex justify-content-center">
                    Apakah Anda yakin ingin menolak permintaan bidan ini?
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-secondary w-25" data-bs-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-primary w-25">Ya</button>
            </div>
        </div>
    </div>
</div>

{{-- untuk modal accept --}}
<div class="modal fade" id="exampleModal-Accept" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
              <h5 class="modal-title" id="exampleModalLabel">Terima</h5>
            </div>
            <div class="modal-body">
                <div class="formbold-mb-3 d-flex justify-content-center">
                    Apakah Anda yakin ingin menerima permintaan bidan ini?
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-secondary w-25" data-bs-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-primary w-25">Ya</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('addScript')
<script>
    $(document).ready(function () {
        $('#example').DataTable({
            columnDefs: [
                { targets: [7], orderable: false }  // Kolom 10, 11, dan 16 tidak dapat di-sorting
            ]
        });
    });
</script>
@endsection

