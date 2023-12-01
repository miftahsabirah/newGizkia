@extends('master.layoutsAdmin')

@section('link')
    <link rel="stylesheet" href="css/formData.css">
@endsection

@section('title')
    Tambah Rekap Imunisasi
@endsection


<!-- MAIN -->

@section('isi')
<div class="formbold-main-wrapper">
    <div class="formbold-form-wrapper">
        <h2 class="formbold-heading">Tambah Rekap Imunisasi</h2>
        <div class="color-container">
          <h5 class="sub-header">Info Singkat</h5>
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
                    <label for="JK" class="formbold-form-label"> Puskesmas </label>
                    <input
                    type="text"
                    name="JK"
                    id="JK"
                    class="formbold-form-input"
                    />
                </div>
            </div>

        </div>


        <div class="color-container">
          <h5 class="sub-header">Rekap Imunisasi</h5>
          <div class="formbold-input-flex">
              <div class="formbold-w-45">
                <label for="akte" class="formbold-form-label"> Hepatitis 0 </label>
                <input
                  type="text"
                  name="akte"
                  id="akte"
                  class="formbold-form-input"
                />
              </div>
        
              <div class="formbold-w-45">
                <label for="kk" class="formbold-form-label"> BCG </label>
                <input
                  type="text"
                  name="kk"
                  id="kk"
                  class="formbold-form-input"
                />
              </div>
            </div>

            <div class="formbold-input-flex">
                <div class="formbold-w-45">
                  <label for="akte" class="formbold-form-label"> DPT 1 </label>
                  <input
                    type="text"
                    name="akte"
                    id="akte"
                    class="formbold-form-input"
                  />
                </div>
          
                <div class="formbold-w-45">
                  <label for="kk" class="formbold-form-label"> DPT 2 </label>
                  <input
                    type="text"
                    name="kk"
                    id="kk"
                    class="formbold-form-input"
                  />
                </div>
              </div>

              <div class="formbold-input-flex">
                <div class="formbold-w-45">
                  <label for="akte" class="formbold-form-label"> DPT 3 </label>
                  <input
                    type="text"
                    name="akte"
                    id="akte"
                    class="formbold-form-input"
                  />
                </div>
          
                <div class="formbold-w-45">
                  <label for="kk" class="formbold-form-label"> Polio 1 </label>
                  <input
                    type="text"
                    name="kk"
                    id="kk"
                    class="formbold-form-input"
                  />
                </div>
              </div>

              <div class="formbold-input-flex">
                <div class="formbold-w-45">
                  <label for="akte" class="formbold-form-label"> Polio 2 </label>
                  <input
                    type="text"
                    name="akte"
                    id="akte"
                    class="formbold-form-input"
                  />
                </div>
          
                <div class="formbold-w-45">
                  <label for="kk" class="formbold-form-label"> Polio 3 </label>
                  <input
                    type="text"
                    name="kk"
                    id="kk"
                    class="formbold-form-input"
                  />
                </div>
              </div>

              <div class="formbold-input-flex">
                <div class="formbold-w-45">
                  <label for="akte" class="formbold-form-label"> Polio 4 </label>
                  <input
                    type="text"
                    name="akte"
                    id="akte"
                    class="formbold-form-input"
                  />
                </div>
          
                <div class="formbold-w-45">
                  <label for="kk" class="formbold-form-label"> IPV </label>
                  <input
                    type="text"
                    name="kk"
                    id="kk"
                    class="formbold-form-input"
                  />
                </div>
              </div>

              <div class="formbold-input-flex">
                <div class="formbold-w-45">
                  <label for="akte" class="formbold-form-label"> Campak </label>
                  <input
                    type="text"
                    name="akte"
                    id="akte"
                    class="formbold-form-input"
                  />
                </div>
          
                <div class="formbold-w-45">
                  <label for="kk" class="formbold-form-label"> Booster Pentavalen </label>
                  <input
                    type="text"
                    name="kk"
                    id="kk"
                    class="formbold-form-input"
                  />
                </div>
              </div>

              <div class="formbold-input-flex">
                <div class="formbold-w-45">
                  <label for="kk" class="formbold-form-label"> Booster Campak </label>
                  <input
                    type="text"
                    name="kk"
                    id="kk"
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

