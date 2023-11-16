<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/formData.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="formbold-main-wrapper">
    <div class="formbold-form-wrapper">
        <h2 class="formbold-heading">Tambah Data Ibu Hamil Risti</h2>
        <div class="color-container">
          <h5 class="sub-header">Data Diri Ibu Hamil</h5>
          <div class="formbold-input-flex">
              <div class="formbold-w-45">
                <label for="noReg" class="formbold-form-label"> No. Register </label>
                <input
                  type="text"
                  name="noReg"
                  id="noReg"
                  class="formbold-form-input"
                />
              </div>
        
              <div class="formbold-w-45">
                <label for="jenis" class="formbold-form-label"> Jenis </label>
                <input
                  type="text"
                  name="jenis"
                  id="jenis"
                  class="formbold-form-input"
                />
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
                <label for="gakin" class="formbold-form-label"> Gakin </label>
                <input
                  type="text"
                  name="gakin"
                  id="gakin"
                  class="formbold-form-input"
                />
              </div>
            </div>
        
            <div class="formbold-input-flex">
              <div class="formbold-w-45">
                <label for="umur" class="formbold-form-label">Umur</label>
                <input
                  type="text"
                  name="umur"
                  id="umur"
                  class="formbold-form-input"
                />
              </div>
        
              <div class="formbold-w-45">
                <label for="jenisRisti" class="formbold-form-label"> Jenis Risti </label>
                <input
                  type="text"
                  name="jenisRisti"
                  id="jenisRisti"
                  class="formbold-form-input"
                />
              </div>
            </div>

            <div class="formbold-input-flex">
              <div class="formbold-w-45">
                <label for="suami" class="formbold-form-label">Suami</label>
                <input
                  type="text"
                  name="suami"
                  id="suami"
                  class="formbold-form-input"
                />
              </div>
        
              <div class="formbold-w-45">
                <label for="hbAkhir" class="formbold-form-label"> HB. Akhir </label>
                <input
                  type="text"
                  name="hbAkhir"
                  id="hbAkhir"
                  class="formbold-form-input"
                />
              </div>
            </div>

        </div>

        <div class="color-container">
          <h5 class="sub-header">Alamat Ibu Hamil</h5>
          <div class="formbold-input-flex">
              <div class="formbold-w-45">
                <label for="rt" class="formbold-form-label"> RT </label>
                <input
                  type="text"
                  name="rt"
                  id="rt"
                  class="formbold-form-input"
                />
              </div>
        
              <div class="formbold-w-45">
                <label for="uhSekarang" class="formbold-form-label"> Dusun </label>
                <input
                  type="text"
                  name="dusun"
                  id="dusun"
                  class="formbold-form-input"
                />
              </div>
            </div>

            <div class="formbold-input-flex">
              <div class="formbold-w-45">
                <label for="rw" class="formbold-form-label"> RW </label>
                <input
                  type="text"
                  name="rw"
                  id="rw"
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

        </div>

          <div class="formbold-btn-wrapper">
              <button type="button" class="button-modal formbold-btn save" data-bs-toggle="modal" data-bs-target="#exampleModal-2">
                  Simpan
              </button>
              <button type="button" class="formbold-btn cancel">
                <a href="{{ route('dataBumilRisti') }}" style="color: #ffffff; text-decoration: none;">Batal</a>
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
                                <a href="{{ route('dataBumilRisti') }}" style="color: #ffffff; text-decoration: none;">Ya</a>
                              </button>
                          </div>
                      </div>
                  </div>
              </div>
  
    </div>  
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>