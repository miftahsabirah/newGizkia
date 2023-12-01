@extends('master.layoutsAdmin')

@section('link')
    <link rel="stylesheet" href="css/formData.css">
@endsection

@section('title')
    Form Data Bumil
@endsection


<!-- MAIN -->

@section('isi')
<div class="formbold-main-wrapper">
    <div class="formbold-form-wrapper">
        <h2 class="formbold-heading">Tambah Data Ibu Hamil</h2>
        <div class="color-container">
          <h5 class="sub-header">Data Diri Ibu Hamil</h5>
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
                <label for="reg" class="formbold-form-label"> Tgl Reg </label>
                <input type="date" name="reg" id="reg" class="formbold-form-input" />
              </div>
            </div>

            <div class="formbold-input-flex">
              <div class="formbold-w-45">
                <label for="nama" class="formbold-form-label"> Nama </label>
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
        
            <div class="formbold-input-flex">
              <div class="formbold-w-45">
                <label for="htp" class="formbold-form-label">HTP</label>
                <input
                  type="text"
                  name="htp"
                  id="htp"
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
                <label for="puskesmas" class="formbold-form-label">Puskesmas</label>
                <input
                  type="text"
                  name="puskesmas"
                  id="puskesmas"
                  class="formbold-form-input"
                />
              </div>
        
              <div class="formbold-w-45">
                <label for="kecamatan" class="formbold-form-label"> Kecamatan </label>
                <input
                  type="text"
                  name="kecamatan"
                  id="kecamatan"
                  class="formbold-form-input"
                />
              </div>
            </div>

        </div>

        <div class="color-container">
          <h5 class="sub-header">Data Diri Ibu Hamil</h5>
          <div class="formbold-input-flex">
              <div class="formbold-w-45">
                <label for="uh" class="formbold-form-label"> Umur Hamil </label>
                <input
                  type="text"
                  name="uh"
                  id="uh"
                  class="formbold-form-input"
                />
              </div>
        
              <div class="formbold-w-45">
                <label for="uhSekarang" class="formbold-form-label"> Umur Kehamilan Sekarang </label>
                <input
                  type="text"
                  name="uhSekarang"
                  id="uhSekarang"
                  class="formbold-form-input"
                />
              </div>
            </div>

            <div class="formbold-input-flex">
              <div class="formbold-w-45">
                <label for="bb" class="formbold-form-label"> BB Awal </label>
                <input
                  type="text"
                  name="bb"
                  id="bb"
                  class="formbold-form-input"
                />
              </div>
        
              <div class="formbold-w-45">
                <label for="noTelp" class="formbold-form-label"> No. Telp Suami </label>
                <input
                  type="text"
                  name="noTelp"
                  id="noTelp"
                  class="formbold-form-input"
                />
              </div>
            </div>

        </div>

          <div class="formbold-btn-wrapper">
              <button type="button" class="button-modal formbold-btn save" data-bs-toggle="modal" data-bs-target="#exampleModal-2">
                  Simpan
              </button>
              <button type="button" class="formbold-btn cancel">
                <a href="{{ route('dataBumil') }}" style="color: #ffffff; text-decoration: none;">Batal</a>
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
