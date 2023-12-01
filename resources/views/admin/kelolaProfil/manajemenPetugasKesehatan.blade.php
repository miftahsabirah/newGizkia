@extends('master.layoutsAdmin')

@section('link')
    <link rel="stylesheet" href="css/manajemenProfil.css">
@endsection

@section('title')
    Manajemen Petugas Kesehatan
@endsection

@section('isi')
    <div class="main-container">
        <div class="title-container rounded-top border-bottom">
            <h2>Manajemen Petugas Kesehatan</h2>
        </div>
        <div class="table-container">
                <div>
                    <a href="{{ route('Formtambah') }}" type="button" class="add-data">
                        <i class="fi fi-rr-plus-small add-icon"></i> Tambah Data
                    </a>
                </div>

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
                            <button class="icon-button">
                                <a href="{{ route('editAkses') }}">
                                    <i class="fi fi-rr-edit" style="color: #624DE3;"></i> <!-- Ikon pertama menjadi merah -->
                                </a>
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
                        targets: [7],
                        orderable: false
                    } // Kolom 10, 11, dan 16 tidak dapat di-sorting
                ]
            });
        });
    </script>
@endsection


