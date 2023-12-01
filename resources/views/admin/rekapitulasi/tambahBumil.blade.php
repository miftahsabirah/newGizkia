@extends('master.layoutsAdmin')

@section('link')
    <link rel="stylesheet" href="css/formData.css">
@endsection

@section('title')
    Tambah Rekap Bumil
@endsection


<!-- MAIN -->

@section('isi')
<div class="formbold-main-wrapper">
    <div class="formbold-form-wrapper">
        <h2 class="formbold-heading">Tambah Rekap Bumil</h2>
        <div class="color-container">
          <h5 class="sub-header">Rekap Bumil</h5>
          <div class="formbold-input-flex">
                <div class="formbold-w-45">
                    <label for="nama" class="formbold-form-label"> Kode </label>
                    <input
                    type="text"
                    name="nama"
                    id="nama"
                    class="formbold-form-input"
                    />
                </div>
            
                <div class="formbold-w-45">
                    <label for="reg" class="formbold-form-label"> Melahirkan </label>
                    <input type="date" name="reg" id="reg" class="formbold-form-input" />
                  </div>
            </div>

            <div class="formbold-input-flex">
                <div class="formbold-w-45">
                    <label for="noIndex" class="formbold-form-label"> Puskesmas </label>
                    <input
                      type="text"
                      name="noIndex"
                      id="noIndex"
                      class="formbold-form-input"
                    />
                  </div>

                  <div class="formbold-w-45">
                    <label for="reg" class="formbold-form-label"> Abortus </label>
                    <input type="date" name="reg" id="reg" class="formbold-form-input" />
                  </div>
        
            </div>
        
            <div class="formbold-input-flex">
                <div class="formbold-w-45">
                    <label for="namaAyah" class="formbold-form-label"> Register </label>
                    <input
                    type="text"
                    name="namaAyah"
                    id="namaAyah"
                    class="formbold-form-input"
                    />
                </div>
        
                <div class="formbold-w-45">
                    <label for="namaIbu" class="formbold-form-label"> Meninggal </label>
                    <input
                    type="text"
                    name="namaIbu"
                    id="namaIbu"
                    class="formbold-form-input"
                    />
                </div>
            </div>

            <div class="formbold-input-flex">
                <div class="formbold-w-45">
                    <label for="anak" class="formbold-form-label"> K1 Murni </label>
                    <input
                    type="text"
                    name="anak"
                    id="anak"
                    class="formbold-form-input"
                    />
                </div>
        
                <div class="formbold-w-45">
                    <label for="status" class="formbold-form-label"> Pindah </label>
                    <input
                    type="text"
                    name="status"
                    id="status"
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
                <a href="{{ route('rekapBumil') }}" style="color: #ffffff; text-decoration: none;">Batal</a>
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
                                <a href="{{ route('rekapBumil') }}" style="color: #ffffff; text-decoration: none;">Ya</a>
                              </button>
                          </div>
                      </div>
                  </div>
              </div>
  
    </div>  
</div>

@endsection

