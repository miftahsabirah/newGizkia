@extends('master.layoutsAdmin')

@section('link')
<link rel="stylesheet" href="css/manajemenProfil.css">
@endsection

@section('title')
Data Balita
@endsection


<!-- MAIN -->

@section('isi')

  <div class="dropdown" style="display: flex; justify-content: space-between; align-items: center;">
    <h4>Data Balita</h4>
    <button type="button" class="add-data">
        <i class="fi fi-rr-plus-small add-icon"></i> Tambah Data
    </button>
  </div>


    <div class="main-container">      
        <div class="title-container rounded-top border-bottom">
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

          {{-- button modal 3 --}}
          <button type="button" class="button-modal" data-bs-toggle="modal" data-bs-target="#exampleModal-3">
            Variabel
          </button>
          
          <!-- Modal 3 -->
          <div class="modal fade" id="exampleModal-3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <div class="formbold-mb-3">
                    <label class="formbold-form-label">Periode Awal</label>
                    <input class="formbold-form-input" type="date" name="TanggalAwal" id="TanggalAwal">
                </div>
                <div class="formbold-mb-3">
                    <label class="formbold-form-label">Tanggal Akhir</label>
                    <input class="formbold-form-input" type="date" name="TanggalAkhir" id="TanggalAkhir">
                </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                  <button type="button" class="btn btn-primary" onclick="terapkanPeriode()">Terapkan</button>
                </div>
              </div>
            </div>
          </div>
          
        </div>

        
        <div class="table-container">
        
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                      <th style="text-align: center;">No. Index Bumil</th>
                      <th style="text-align: center;">Nama</th>
                      <th style="text-align: center;">Suami</th>
                      <th style="text-align: center;">Posyandu</th>
                      <th style="text-align: center;">RT</th>
                      <th style="text-align: center;">RW</th>
                      <th style="text-align: center;">Dusun</th>
                      <th style="text-align: center;">Desa</th>
                      <th style="text-align: center;">Tgl</th>
                      <th style="text-align: center;">Penolong</th>
                      <th style="text-align: center;">Cara Lahir</th>
                      <th style="text-align: center;">Kondisi Bayi</th>
                      <th style="text-align: center;">Kondisi Ibu</th>
                      <th style="text-align: center;">Konseling Pasca Salin</th>
                      <th style="text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>012345671</td>
                        <td>Resanti Dwi Cahyani</td>
                        <td>Doni Kurnia</td>                        
                        <td>Posyanduu</td>
                        <td>5</td>
                        <td>2</td>
                        <td>Klakah</td>
                        <td>Klakah</td>
                        <td>2011-04-25</td>
                        <td>Dipsi Lala</td>
                        <td>Normal</td>
                        <td>Sehat</td>
                        <td>Sehat</td>
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

</body>
</html>
