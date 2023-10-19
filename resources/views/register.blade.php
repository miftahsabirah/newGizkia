<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
  

<div class="formbold-main-wrapper">
    <img src="img/bgRegister" alt="gambar background">
    <div class="formbold-form-wrapper">
        <b><h1 class="title">Register</h1></b>
        <form action="https://formbold.com/s/FORM_ID" method="POST">
            <div class="formbold-input-wrapp formbold-mb-3">
              <label for="firstname" class="formbold-form-label"> Username </label>
                <input
                  type="text"
                  name="firstname"
                  id="firstname"
                  placeholder=" Masukkan Username"
                  class="formbold-form-input"
                />
            </div>
      
            <div class="formbold-mb-3">
              <label for="password" class="formbold-form-label"> Password </label>
              <input
                type="text"
                name="password"
                id="password"
                placeholder="Masukkan Password"
                class="formbold-form-input"
              />
            </div>

            <div class="formbold-mb-3">
              <label for="nama lengkap" class="formbold-form-label"> Nama Lengkap </label>
              <input
                type="text"
                name="nama lengkap"
                id="nama lengkap"
                placeholder="Masukkan Nama Lengkap"
                class="formbold-form-input"
              />
            </div>
      
      
            <div class="formbold-mb-3">
              <label class="formbold-form-label">Jabatan</label>
      
              <select class="formbold-form-input" name="jabatan" id="jabatan">
                <option value="Pilih Jabatan">Pilih Jabatan</option>
                <option value="Bidan desa">Bidan Desa</option>
                <option value="Lainnya">Lainnya</option>
              </select>
            </div>

            <div class="formbold-mb-3">
              <label for="nip" class="formbold-form-label"> NIP </label>
              <input
                type="text"
                name="nip"
                id="nip"
                placeholder="Masukkan NIP"
                class="formbold-form-input"
              />
            </div>

            <div class="formbold-mb-3">
              <label for="email" class="formbold-form-label"> Email </label>
              <input
                type="email"
                name="email"
                id="email"
                placeholder="Masukkan Email"
                class="formbold-form-input"
              />
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
  
        <button class="formbold-btn">Submit</button>
      </form>
    </div>
  </div>


</body>
</html>
  