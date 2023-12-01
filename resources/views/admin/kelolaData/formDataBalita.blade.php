@extends('master.layoutsAdmin')

@section('link')
    <link rel="stylesheet" href="css/formData.css">
@endsection

@section('title')
    Form Data Balita
@endsection


<!-- MAIN -->

@section('isi')

    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">
            <h2 class="formbold-heading">Tambah Data Anak</h2>
            <form action="{{ route('storedatabayi') }}" method="POST">
                @csrf
                <div class="color-container">
                    <h5 class="sub-header">Data Diri Anak</h5>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="nama_bayi" class="formbold-form-label"> nama_bayi </label>
                            <input type="text" name="nama_bayi" id="nama_bayi" class="formbold-form-input" />
                        </div>

                        <div class="formbold-w-45">
                            <label for="JK" class="formbold-form-label"> Jenis Kelamin </label>
                            <input type="text" name="JK" id="JK" class="formbold-form-input" />
                        </div>
                    </div>

                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="dob" class="formbold-form-label"> Tanggal Lahir </label>
                            <input type="date" name="dob" id="dob" class="formbold-form-input" />
                        </div>

                        <div class="formbold-w-45">
                            <label for="noIndex" class="formbold-form-label"> No. Index </label>
                            <input type="text" name="noIndex" id="noIndex" class="formbold-form-input" />
                        </div>

                    </div>

                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="namaAyah" class="formbold-form-label"> Nama Ayah </label>
                            <input type="text" name="namaAyah" id="namaAyah" class="formbold-form-input" />
                        </div>

                        <div class="formbold-w-45">
                            <label for="namaIbu" class="formbold-form-label"> Nama Ibu </label>
                            <input type="text" name="namaIbu" id="namaIbu" class="formbold-form-input" />
                        </div>
                    </div>

                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="anak" class="formbold-form-label"> Anak Ke- </label>
                            <input type="text" name="anak" id="anak" class="formbold-form-input" />
                        </div>

                        <div class="formbold-w-45">
                            <label for="status" class="formbold-form-label"> Status </label>
                            <input type="text" name="status" id="status" class="formbold-form-input" />
                        </div>
                    </div>

                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="tglReg" class="formbold-form-label"> Tanggal Registrasi </label>
                            <input type="date" name="tglReg" id="tglReg" class="formbold-form-input" />
                        </div>

                        <div class="formbold-w-45">
                            <label for="noTelp" class="formbold-form-label"> No. Telp Orang Tua </label>
                            <input type="text" name="noTelp" id="noTelp" class="formbold-form-input" />
                        </div>

                    </div>

                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="rujuk" class="formbold-form-label"> Dirujuk Ke </label>
                            <input type="text" name="rujuk" id="rujuk" class="formbold-form-input" />
                        </div>

                        <div class="formbold-w-45">
                            <label for="kategori" class="formbold-form-label"> Kategori Anak </label>
                            <input type="text" name="kategori" id="kategori" class="formbold-form-input" />
                        </div>

                    </div>

                </div>

                <div class="color-container">
                    <h5 class="sub-header">Data Penting Anak</h5>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="akte" class="formbold-form-label"> Akte </label>
                            <input type="text" name="akte" id="akte" class="formbold-form-input" />
                        </div>

                        <div class="formbold-w-45">
                            <label for="kk" class="formbold-form-label"> No. KK </label>
                            <input type="text" name="kk" id="kk" class="formbold-form-input" />
                        </div>
                    </div>

                </div>

                <div class="color-container">
                    <h5 class="sub-header">Data Kesehatan Anak</h5>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="akte" class="formbold-form-label"> Gakin </label>
                            <input type="text" name="akte" id="akte" class="formbold-form-input" />
                        </div>

                        <div class="formbold-w-45">
                            <label for="kk" class="formbold-form-label"> Stuning </label>
                            <input type="text" name="kk" id="kk" class="formbold-form-input" />
                        </div>
                    </div>

                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="bb" class="formbold-form-label"> RT </label>
                            <input type="text" name="bb" id="bb" class="formbold-form-input" />
                        </div>

                        <div class="formbold-w-45">
                            <label for="noTelp" class="formbold-form-label"> Cek IDL </label>
                            <input type="text" name="noTelp" id="noTelp" class="formbold-form-input" />
                        </div>
                    </div>

                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="bb" class="formbold-form-label"> RW </label>
                            <input type="text" name="bb" id="bb" class="formbold-form-input" />
                        </div>

                        <div class="formbold-w-45">
                            <label for="noTelp" class="formbold-form-label"> Cek Baduta </label>
                            <input type="text" name="noTelp" id="noTelp" class="formbold-form-input" />
                        </div>
                    </div>

                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="bb" class="formbold-form-label"> TB Terakhir </label>
                            <input type="text" name="bb" id="bb" class="formbold-form-input" />
                        </div>

                        <div class="formbold-w-45">
                            <label for="noTelp" class="formbold-form-label"> Status BBU </label>
                            <input type="text" name="noTelp" id="noTelp" class="formbold-form-input" />
                        </div>
                    </div>

                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="tglReg" class="formbold-form-label"> Tanggal Timbang Terakhir </label>
                            <input type="date" name="tglReg" id="tglReg" class="formbold-form-input" />
                        </div>

                        <div class="formbold-w-45">
                            <label for="noTelp" class="formbold-form-label"> Status TBU </label>
                            <input type="text" name="noTelp" id="noTelp" class="formbold-form-input" />
                        </div>
                    </div>

                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="bb" class="formbold-form-label"> No. Kartu </label>
                            <input type="text" name="bb" id="bb" class="formbold-form-input" />
                        </div>

                        <div class="formbold-w-45">
                            <label for="noTelp" class="formbold-form-label"> NIK Ibu </label>
                            <input type="text" name="noTelp" id="noTelp" class="formbold-form-input" />
                        </div>
                    </div>

                </div>

                <div class="color-container">
                    <h5 class="sub-header">Alamat Anak</h5>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="akte" class="formbold-form-label"> Kode Tempat </label>
                            <input type="text" name="akte" id="akte" class="formbold-form-input" />
                        </div>

                        <div class="formbold-w-45">
                            <label for="kk" class="formbold-form-label"> Kode Wilayah </label>
                            <input type="text" name="kk" id="kk" class="formbold-form-input" />
                        </div>
                    </div>

                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="akte" class="formbold-form-label"> Alamat </label>
                            <input type="text" name="akte" id="akte" class="formbold-form-input" />
                        </div>

                        <div class="formbold-w-45">
                            <label for="kk" class="formbold-form-label"> Kode Suku </label>
                            <input type="text" name="kk" id="kk" class="formbold-form-input" />
                        </div>
                    </div>

                </div>

                <div class="formbold-btn-wrapper">
                    <button type="button" class="button-modal formbold-btn save" data-bs-toggle="modal"
                        data-bs-target="#exampleModal-2">
                        Simpan
                    </button>
                    <button type="button" class="formbold-btn cancel">
                        <a href="{{ route('dataBumil') }}" style="color: #ffffff; text-decoration: none;">Batal</a>
                    </button>

                </div>

                <!-- Modal 2 -->
                <div class="modal fade" id="exampleModal-2" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
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
                                <button type="button" class="btn btn-secondary w-25"
                                    data-bs-dismiss="modal">Tidak</button>
                                <button type="submit" class="btn btn-primary w-25">
                                    <a style="color: #ffffff; text-decoration: none;">Ya</a>
                                </button>
                            </div>
                        </div>
                    </div>
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

