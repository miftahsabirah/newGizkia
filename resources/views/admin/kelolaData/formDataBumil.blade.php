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
              <button class="formbold-btn cancel">Batal</button>

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
                              <button type="button" class="btn btn-primary w-25">Ya</button>
                          </div>
                      </div>
                  </div>
              </div>
  
    </div>  
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>