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

    <div class="formbold-main-wrapper"
        style="background-image: url('img/bgRegisterLogin.png'); background-size: cover; background-repeat: no-repeat;">
        <div class="formbold-form-wrapper">
            <b>
                <h1 class="title">Register</h1>
            </b>
            <form action="{{ route('storeRegister') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="formbold-input-wrapp formbold-mb-3">
                    <label for="username" class="formbold-form-label">Username</label>
                    <input type="text" class="formbold-form-input @error('username') is-invalid @enderror"
                        name="username" id="username" value="{{ old('username') }}" placeholder="Masukkan Username">
                    @if ($errors->has('username'))
                        <span class="text-danger">{{ $errors->first('username') }}</span>
                    @endif
                </div>

                <div class="formbold-mb-3">
                    <label for="password" class="formbold-form-label">Password</label>
                    <input type="password" class="formbold-form-input @error('password') is-invalid @enderror"
                        name="password" id="password" placeholder="Masukkan Password">
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="formbold-mb-3">
                    <label for="email" class="formbold-form-label">Email</label>
                    <input type="email" class="formbold-form-input @error('email') is-invalid @enderror"
                        name="email" id="password" placeholder="Masukkan email">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="formbold-mb-3">
                    <label for="nama" class="formbold-form-label">Nama Lengkap</label>
                    <input type="text" class="formbold-form-input @error('nama') is-invalid @enderror" name="nama"
                        id="nama" placeholder="Masukkan Nama Lengkap">
                    @if ($errors->has('nama'))
                        <span class="text-danger">{{ $errors->first('nama') }}</span>
                    @endif
                </div>

                <div class="formbold-mb-3">
                    <label for="telepon" class="formbold-form-label">Telepon</label>
                    <input type="text" name="telepon"
                        class="formbold-form-input @error('telepon') is-invalid @enderror" id="telepon"
                        placeholder="Masukkan Telepon">
                    @if ($errors->has('telepon'))
                        <span class="text-danger">{{ $errors->first('telepon') }}</span>
                    @endif
                </div>

                <div class="formbold-mb-3">
                    <label for="jenis_petugas" class="formbold-form-label">Jenis Petugas</label>
                    <select name="jenis_petugas"
                        class="formbold-form-input @error('jenis_petugas') is-invalid @enderror" id="jenis_petugas">
                        <option value="">Pilih Jenis Petugas</option>
                        <option value="bidan" {{ old('jenis_petugas') == 'bidan' ? 'selected' : '' }}>bidan</option>
                        <option value="dokter" {{ old('jenis_petugas') == 'dokter' ? 'selected' : '' }}>dokter</option>
                    </select>
                    @if ($errors->has('jenis_petugas'))
                        <span class="text-danger">{{ $errors->first('jenis_petugas') }}</span>
                    @endif
                </div>


                <div class="formbold-mb-3">
                    <label for="nip" class="formbold-form-label">NIP</label>
                    <input type="text" name="nip" class="formbold-form-input @error('nip') is-invalid @enderror"
                        id="nip" placeholder="Masukkan NIP">
                    @if ($errors->has('nip'))
                        <span class="text-danger">{{ $errors->first('nip') }}</span>
                    @endif
                </div>

                <div class="formbold-mb-3">
                    <label for="pwd" class="formbold-form-label">pwd</label>
                    <input type="text" name="pwd" class="formbold-form-input @error('pwd') is-invalid @enderror"
                        id="pwd" placeholder="Masukkan pwd">
                    @if ($errors->has('pwd'))
                        <span class="text-danger">{{ $errors->first('pwd') }}</span>
                    @endif
                </div>

                <div class="formbold-mb-3">
                    <label for="kode_pkm" class="formbold-form-label">Kode PKM</label>
                    <input type="text" name="kode_pkm"
                        class="formbold-form-input @error('kode_pkm') is-invalid @enderror" id="kode_pkm"
                        placeholder="Masukkan Kode PKM">
                    @if ($errors->has('kode_pkm'))
                        <span class="text-danger">{{ $errors->first('kode_pkm') }}</span>
                    @endif
                </div>

                {{-- <div class="formbold-mb-3">
                    <label for="image" class="formbold-form-label"> Foto </label>
                    <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" placeholder="Pilih foto untuk di unggah" 
                        class="formbold-form-input" />
                    @if ($errors->has('image'))
                        <span class="text-danger">{{ $errors->first('image') }}</span>
                    @endif
                </div> --}}

                {{-- <div class="dropzone">
                    <label for="dropzone-file" class="dropzone-label">
                        <div class="dropzone-content">
                            <svg class="dropzone-icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
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
                </div> --}}

                <button class="formbold-btn">Submit</button>
            </form>
        </div>
    </div>


</body>

</html>
