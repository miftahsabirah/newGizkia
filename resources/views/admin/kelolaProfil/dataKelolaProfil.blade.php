<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/dataKelolaProfil.css">
</head>
<body>
        <div class="formbold-main-wrapper">
          <div class="formbold-form-wrapper">
            <h2 class="formbold-heading">Tambah Petugas Kesehatan</h2>
            <div class="formbold-input-flex">
            <div class="formbold-w-45">
              <label for="firstname" class="formbold-form-label"> NIP </label>
              <input
                type="text"
                name="nip"
                id="NIP"
                placeholder="NIP"
                class="formbold-form-input"
              />
            </div>
      
            <div class="formbold-w-45">
              <label for="age" class="formbold-form-label"> Nama Bidan </label>
              <input
                type="text"
                name="Nama Bidan"
                id="namabidan"
                placeholder="Safitri"
                class="formbold-form-input"
              />
            </div>
          </div>
      
          <div class="formbold-input-flex">
            <div class="formbold-w-45">
              <label for="age" class="formbold-form-label"> Puskesmas </label>
              <input
                type="text"
                name="Puskesmas"
                id="puskesmas"
                placeholder="Ngudi Rahayu"
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
              <label class="formbold-form-label">Jabatan</label>
              <select class="formbold-form-input" name="occupation" id="occupation">
                <option value="male">Bidan</option>
                <option value="female">Petugas</option>
                <option value="others">Lainnya</option>
              </select>
            </div>
      
            <div class="formbold-w-45">
              <label for="email" class="formbold-form-label"> Username </label>
              <input
                type="text"
                name="username"
                id="username"
                placeholder="example"
                class="formbold-form-input"
              />
            </div>
          </div>
      
          <div class="formbold-mb-3">
                    <label for="foto" class="formbold-form-label"> Foto </label>
                    <input
                      name="foto"
                      id="foto"
                      placeholder="Pilih foto untuk di unggah"
                      class="formbold-form-input"
                      disabled
                    />
                  </div>
            
                  <div class="dropzone">
                    <label for="dropzone-file" class="dropzone-label">
                        <div class="dropzone-content">
                            <svg class="dropzone-icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                            </svg>
                            <p class="dropzone-text">
                                <span class="font-semibold">Click to upload</span> or drag and drop
                            </p>
                            <p class="dropzone-hint">
                                SVG, PNG, JPG or GIF (MAX. 800x400px)
                            </p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div>
        
      
          <div class="formbold-btn-wrapper">
              <button class="formbold-btn save">Simpan</button>
              <button class="formbold-btn cancel">Batal</button>
            </div>

            
        </div>
      </div>
</body>
</html>