@extends('master.layoutsAdmin')

@section('link')
<link rel="stylesheet" href="css/manajemenProfil.css">
@endsection

@section('title')
Data Bumil Risti
@endsection


<!-- MAIN -->

@section('isi')

  <div class="dropdown" style="display: flex; justify-content: space-between; align-items: center;">
    <div>
        <button class="btn btn-color dropdown-toggle button1" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #D9D9D9">
            -- Bumil Risti --
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{ route('indexinfoawalbumil') }}">Ibu Hamil</a>
            <a class="dropdown-item" href="{{ route('dataBumilRisti') }}">Bumil Risti</a>
            <a class="dropdown-item" href="{{ route('dataIbuMelahirkan') }}">Ibu Melahirkan</a>
        </div>
    </div>

    <a href="{{ route('formDataBumilRisti') }}" type="button" class="add-data2">
        <i class="fi fi-rr-plus-small add-icon"></i> Tambah Data Bumil Risti
    </a>
  </div>


    <div class="main-container">      
        <div class="title-container rounded-top border-bottom d-flex justify-content-between align-items-center">
            <div>
                {{-- button modal 1 --}}
                <button type="button" class="button-modal" data-bs-toggle="modal" data-bs-target="#exampleModal-1">
                    Wilayah
                </button>
                
                <!-- Modal 1 -->
                <div class="modal fade" id="exampleModal-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="formbold-mb-3">
                                    <label class="formbold-form-label">Desa</label>
                            
                                    <select class="formbold-form-input" name="Desa" id="Desa">
                                    <option value="Pilih Desa">--Pilih Desa--</option>
                                    <option value="Desa1">Desa 1</option>
                                    <option value="Desa2">Desa 2</option>
                                    <option value="Desa3">Desa 3</option>
                                    </select>
                                </div>
                                <div class="formbold-mb-3">
                                    <label class="formbold-form-label">Kecamatan</label>
                            
                                    <select class="formbold-form-input" name="Kecamatan" id="Kecamatan">
                                    <option value="Pilih Kecamatan">--Pilih Kecamatan--</option>
                                    <option value="Kecamatan1">Kecamatan 1</option>
                                    <option value="Kecamatan2">Kecamatan 2</option>
                                    <option value="Kecamatan3">Kecamatan 3</option>
                                    </select>
                                </div>
                                <div class="formbold-mb-3">
                                    <label class="formbold-form-label">Posyandu</label>
                            
                                    <select class="formbold-form-input" name="Posyandu" id="Posyandu">
                                    <option value="Pilih Posyandu">--Pilih Posyandu--</option>
                                    <option value="Posyandu1">Posyandu 1</option>
                                    <option value="Posyandu2">Posyandu 2</option>
                                    <option value="Posyandu3">Posyandu 3</option>
                                    </select>
                                </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-primary">Terapkan</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- button modal 2 --}}
                    <button type="button" class="button-modal" data-bs-toggle="modal" data-bs-target="#exampleModal-2">
                        Puskesmas
                    </button>
                    
                    <!-- Modal 2 -->
                    <div class="modal fade" id="exampleModal-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <div class="formbold-mb-3">
                                <label class="formbold-form-label">Puskesmas</label>
                        
                                <select class="formbold-form-input" name="Puskesmas" id="Puskesmas">
                                <option value="Pilih Puskesmas">--Pilih Puskesmas--</option>
                                <option value="Puskesmas1">Puskesmas 1</option>
                                <option value="Puskesmas2">Puskesmas 2</option>
                                <option value="Puskesmas3">Puskesmas 3</option>
                                </select>
                            </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary">Terapkan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex">
                <div class="form-check-dbr mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Periode HPL
                    </label>
                </div>
    
                <div class="dropdown me-2">
                    <button class="button-dd dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        --Bulan--
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <a class="dropdown-item" href="#">Januari</a>
                        <a class="dropdown-item" href="#">Februari</a>
                        <a class="dropdown-item" href="#">Maret</a>
                        <a class="dropdown-item" href="#">April</a>
                        <a class="dropdown-item" href="#">Mei</a>
                        <a class="dropdown-item" href="#">Juni</a>
                        <a class="dropdown-item" href="#">Juli</a>
                        <a class="dropdown-item" href="#">Agustus</a>
                        <a class="dropdown-item" href="#">September</a>
                        <a class="dropdown-item" href="#">Oktober</a>
                        <a class="dropdown-item" href="#">November</a>
                        <a class="dropdown-item" href="#">Desember</a>
                    </div>
                </div>
    
                <div class="dropdown me-2">
                    <button class="button-dd dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        --Tahun--
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                        <a class="dropdown-item" href="#">2020</a>
                        <a class="dropdown-item" href="#">2021</a>
                        <a class="dropdown-item" href="#">2022</a>
                        <a class="dropdown-item" href="#">2023</a>
                    </div>
                </div>
            </div>
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

<script>
    function terapkanPeriode() {
        // Mendapatkan nilai tanggal dari elemen input
        var periodeValue = document.getElementById('Periode').value;

        // Implementasikan logika terapkan tanggal di sini
        alert('Tanggal telah diterapkan: ' + periodeValue);
        // Tambahkan logika lain sesuai kebutuhan, misalnya kirim data ke server, dll.
    }
</script>

@endsection


