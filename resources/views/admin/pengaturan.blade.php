@extends('master.layoutsAdmin')

@section('link')
<link rel="stylesheet" href="css/manajemenProfil.css">
<link rel="stylesheet" href="css/formData.css">
@endsection

@section('title')
Pengaturan
@endsection


<!-- MAIN -->

@section('isi')



    <div class="table-pengaturan">

        <div>
            <h1 class="title-pengaturan">Informasi Dinas Kesehatan</h1>
        </div>

        <div class="separator"></div>

        <div class="formbold-input-flex">
            <div class="formbold-w-45">
            <label for="noIndex" class="formbold-form-label"> No. Index </label>
            <input
                type="text"
                name="noIndex"
                id="noIndex"
                class="formbold-form-input"
                placeholder="Masukkan Kode"
            />
            </div>

            <div class="formbold-w-45">
                <label for="alamat" class="formbold-form-label"> Alamat </label>
                <input
                    type="text"
                    name="alamat"
                    id="alamat"
                    class="formbold-form-input"
                    placeholder="Masukkan Alamat"
                />
                </div>
        </div>

        <div class="formbold-input-flex">
            <div class="formbold-w-45">
            <label for="dinas" class="formbold-form-label"> Nama Dinas </label>
            <input
                type="text"
                name="dinas"
                id="dinas"
                class="formbold-form-input"
                placeholder="Masukkan Nama Dinas"
            />
            </div>

            <div class="formbold-w-45">
                <label for="telepon" class="formbold-form-label"> Telepon </label>
                <input
                    type="text"
                    name="telepon"
                    id="telepon"
                    class="formbold-form-input"
                    placeholder="Masukkan Nomor Telepon"
                />
                </div>
        </div>

        <div class="formbold-input-flex">
            <div class="formbold-w-45">
            <label for="kab/kota" class="formbold-form-label"> Kabupaten/Kota </label>
            <input
                type="text"
                name="kab/kota"
                id="kab/kota"
                class="formbold-form-input"
                placeholder="Masukkan Kabupaten/Kota"
            />
            </div>

            <div class="formbold-w-45">
                <label for="kepalaDinas" class="formbold-form-label"> Kepala Dinas </label>
                <input
                    type="text"
                    name="kepalaDinas"
                    id="kepalaDinas"
                    class="formbold-form-input"
                    placeholder="Masukkan Nama Kepala Dinas"
                />
                </div>
        </div>

        <div class="formbold-input-flex">
            <div class="formbold-w-45">
            <label for="provinsi" class="formbold-form-label"> Provinsi </label>
            <input
                type="text"
                name="provinsi"
                id="provinsi"
                class="formbold-form-input"
                placeholder="Masukkan Provinsi"
            />
            </div>

            <div class="formbold-w-45">
                <label for="nip" class="formbold-form-label"> NIP </label>
                <input
                    type="text"
                    name="nip"
                    id="nip"
                    class="formbold-form-input"
                    placeholder="Masukkan NIP"
                />
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



@endsection