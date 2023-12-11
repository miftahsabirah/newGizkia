@extends('master.layoutsAdmin')

@section('link')
    <link rel="stylesheet" href="css/formData.css">
@endsection

@section('title')
    Form Data Imunisasi
@endsection


<!-- MAIN -->

@section('isi')
<body>
<div class="formbold-main-wrapper">
    <div class="formbold-form-wrapper">
        <h2 class="formbold-heading">Tambah Data Imunisasi</h2>
        <div class="color-container">
          <h5 class="sub-header">Data Diri Anak</h5>
          <div class="formbold-input-flex">
              <div class="formbold-w-45">
                <label for="noIndex" class="formbold-form-label"> No. Index </label>
                <input
                  type="text"
                  name="noIndex"
                  id="noIndex"
                  class="formbold-form-input"
                />
              </div>
        
              <div class="formbold-w-45">
                <label for="JK" class="formbold-form-label"> Jenis Kelamin </label>
                <input
                  type="text"
                  name="JK"
                  id="JK"
                  class="formbold-form-input"
                />
              </div>
            </div>

            <div class="formbold-input-flex">
              <div class="formbold-w-45">
                <label for="nama" class="formbold-form-label"> Nama Anak </label>
                <input
                  type="text"
                  name="nama"
                  id="nama"
                  class="formbold-form-input"
                />
              </div>
        
              <div class="formbold-w-45">
                <label for="dob" class="formbold-form-label"> Tanggal Lahir </label>
                <input type="date" name="dob" id="dob" class="formbold-form-input" />
              </div>
            </div>

        </div>

        <div class="color-container">
          <h5 class="sub-header">Data Posyandu</h5>
          <div class="formbold-input-flex">
              <div class="formbold-w-45">
                <label for="posyandu" class="formbold-form-label"> Posyandu </label>
                <input
                  type="text"
                  name="posyandu"
                  id="posyandu"
                  class="formbold-form-input"
                />
              </div>
        
              <div class="formbold-w-45">
                <label for="desa" class="formbold-form-label"> Desa </label>
                <input
                  type="text"
                  name="desa"
                  id="desa"
                  class="formbold-form-input"
                />
              </div>
            </div>

            <div class="formbold-input-flex">
              <div class="formbold-w-45">
                <label for="dusun" class="formbold-form-label"> Dusun </label>
                <input
                  type="text"
                  name="dusun"
                  id="dusun"
                  class="formbold-form-input"
                />
              </div>
            </div>

        </div>

          <div class="formbold-btn-wrapper">
            <button type="button" class="formbold-btn cancel">
              <a href="{{ route('dataBumil') }}" style="color: #ffffff; text-decoration: none;">Batal</a>
            </button>
              
            <button type="button" class="button-modal formbold-btn save" data-bs-toggle="modal" data-bs-target="#exampleModal-2">
                  Simpan
              </button>

          </div>
          
          <!-- Modal 2 -->
              <div class="modal fade" id="exampleModal-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                          <div class="modal-header d-flex justify-content-center">
                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Penyimpanan</h5>
                          </div>
                          <div class="modal-body">
                              <div class="formbold-mb-3 d-flex justify-content-center">
                                  Apakah Anda ingin menyimpan data ini?
                              </div>
                          </div>
                          <div class="modal-footer d-flex justify-content-center">
                              <button type="button" class="btn btn-secondary w-25" data-bs-dismiss="modal">Tidak</button>
                              <button type="button" class="btn btn-primary w-25">
                                <a href="{{ route('dataBumil') }}" style="color: #ffffff; text-decoration: none;">Ya</a>
                              </button>
                          </div>
                      </div>
                  </div>
              </div>
  
    </div>  
</div>

@endsection