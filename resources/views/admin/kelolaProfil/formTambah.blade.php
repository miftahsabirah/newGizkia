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
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">
            <h2 class="formbold-heading">Tambah Petugas Kesehatan</h2>
            <form action="{{ route('storepetugas') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="formbold-input-flex">
                    <div class="formbold-w-45">
                        <label for="username" class="formbold-form-label">Username</label>
                        <input type="text" class="formbold-form-input @error('username') is-invalid @enderror"
                            name="username" id="username" value="{{ old('username') }}"
                            placeholder="Masukkan Username">
                        @if ($errors->has('username'))
                            <span class="text-danger">{{ $errors->first('username') }}</span>
                        @endif
                    </div>

                    <div class="formbold-w-45">
                        <label for="password" class="formbold-form-label">Password</label>
                        <input type="password" class="formbold-form-input @error('password') is-invalid @enderror"
                            name="password" id="password" placeholder="Masukkan Password">
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="formbold-w-45">
                        <label for="email" class="formbold-form-label">Email</label>
                        <input type="email" class="formbold-form-input @error('email') is-invalid @enderror"
                            name="email" id="password" placeholder="Masukkan email">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="formbold-w-45">
                        <label for="nama" class="formbold-form-label">Nama Lengkap</label>
                        <input type="text" class="formbold-form-input @error('nama') is-invalid @enderror"
                            name="nama" id="nama" placeholder="Masukkan Nama Lengkap">
                        @if ($errors->has('nama'))
                            <span class="text-danger">{{ $errors->first('nama') }}</span>
                        @endif
                    </div>

                    <div class="formbold-w-45">
                        <label for="telepon" class="formbold-form-label">Telepon</label>
                        <input type="text" name="telepon"
                            class="formbold-form-input @error('telepon') is-invalid @enderror" id="telepon"
                            placeholder="Masukkan Telepon">
                        @if ($errors->has('telepon'))
                            <span class="text-danger">{{ $errors->first('telepon') }}</span>
                        @endif
                    </div>
                    <div class="formbold-w-45">
                        <label for="jenis_petugas" class="formbold-form-label">Jenis Petugas</label>
                        <select name="jenis_petugas"
                            class="formbold-form-input @error('jenis_petugas') is-invalid @enderror" id="jenis_petugas">
                            <option value="">Pilih Jenis Petugas</option>
                            <option value="bidan" {{ old('jenis_petugas') == 'bidan' ? 'selected' : '' }}>bidan
                            </option>
                            <option value="dokter" {{ old('jenis_petugas') == 'dokter' ? 'selected' : '' }}>
                                dokter</option>
                        </select>
                        @if ($errors->has('jenis_petugas'))
                            <span class="text-danger">{{ $errors->first('jenis_petugas') }}</span>
                        @endif
                    </div>
                    <div class="formbold-w-45">
                        <label for="nip" class="formbold-form-label">NIP</label>
                        <input type="text" name="nip"
                            class="formbold-form-input @error('nip') is-invalid @enderror" id="nip"
                            placeholder="Masukkan NIP">
                        @if ($errors->has('nip'))
                            <span class="text-danger">{{ $errors->first('nip') }}</span>
                        @endif
                    </div>

                    <div class="formbold-w-45">
                        <label for="pwd" class="formbold-form-label">pwd</label>
                        <input type="text" name="pwd"
                            class="formbold-form-input @error('pwd') is-invalid @enderror" id="pwd"
                            placeholder="Masukkan pwd">
                        @if ($errors->has('pwd'))
                            <span class="text-danger">{{ $errors->first('pwd') }}</span>
                        @endif
                    </div>

                    <div class="formbold-w-45">
                        <label for="kode_pkm" class="formbold-form-label">Kode PKM</label>
                        <input type="text" name="kode_pkm"
                            class="formbold-form-input @error('kode_pkm') is-invalid @enderror" id="kode_pkm"
                            placeholder="Masukkan Kode PKM">
                        @if ($errors->has('kode_pkm'))
                            <span class="text-danger">{{ $errors->first('kode_pkm') }}</span>
                        @endif
                    </div>
                    {{-- <div class="formbold-input-flex">
                                    <div class="formbold-w-45">
                                    <label for="nip" class="formbold-form-label"> NIP </label>
                                    <input type="text" name="nip" id="nip" placeholder="NIP"
                                        class="formbold-form-input" />
                                    @if ($errors->has('nip'))
                                        <span class="text-danger">{{ $errors->first('nip') }}</span>
                                    @endif
                                </div>

                                <div class="formbold-w-45">
                                    <label for="nama" class="formbold-form-label"> Nama Bidan </label>
                                    <input type="text" name="nama" id="nama" placeholder="Nama bidan"
                                        class="formbold-form-input" />
                                    @if ($errors->has('nama'))
                                        <span class="text-danger">{{ $errors->first('nama') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="formbold-input-flex">
                                <div class="formbold-w-45">
                                    <label for="age" class="formbold-form-label"> Puskesmas </label>
                                    <input type="text" name="Puskesmas" id="puskesmas" placeholder="Ngudi Rahayu"
                                        class="formbold-form-input" />
                                </div>

                                <div class="formbold-w-45">
                                    <label for="dob" class="formbold-form-label"> Tanggal Lahir </label>
                                    <input type="date" name="dob" id="dob"
                                        class="formbold-form-input" />
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
                                    <input type="text" name="username" id="username" placeholder="example"
                                        class="formbold-form-input" />
                                </div> --}}
                </div>

                {{-- <div class="formbold-mb-3">
                    <label for="foto" class="formbold-form-label"> Foto </label>
                    <input name="foto" id="foto" placeholder="Pilih foto untuk di unggah"
                        class="formbold-form-input" disabled />
                </div> --}}
{{-- 
                <div class="dropzone">
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
                </div> --}} --}}


                <div class="formbold-btn-wrapper">
                    <button class="formbold-btn">Submit</button>
                    {{-- <button type="button" class="button-modal formbold-btn save" data-bs-toggle="modal"
                        data-bs-target="#exampleModal-2">
                        Simpan
                    </button> --}}
                    <button type="button" class="formbold-btn cancel">
                <a href="{{ route('manajemenPetugas') }}" style="color: #ffffff; text-decoration: none;">Batal</a>
              </button>

                </div>

                {{--  <!-- Modal 2 -->
                {{-- <div class="modal fade" id="exampleModal-2" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                                    <button type="button" class="btn btn-primary w-25">Ya</button>
                                </div>
                            </div>
                        </div>
                    </div> --}}
            </form>
        </div>
    </div>
    </div> --}}




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>


</html>

