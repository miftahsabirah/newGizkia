
@extends('master.layoutsAdmin')

@section('link')
    <link rel="stylesheet" href="css/formData.css">
@endsection

@section('title')
    Form Data Bumil
@endsection


<!-- MAIN -->

@section('isi')


    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">
            <h2 class="formbold-heading">Tambah Data Ibu Hamil</h2>
            <form action="{{ route('postbumil') }}" method="POST">
                @csrf
                <div class="color-container">
                    <h5 class="sub-header">Data Diri Ibu Hamil</h5>


                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="kode_posyandu" class="formbold-form-label">kode_posyandu</label>
                            <select name="kode_posyandu" id="kode_posyandu" class="formbold-form-input">
                                @foreach ($databumilList as $databumil)
                                    <option value="{{ $databumil->kode_posyandu }}">{{ $databumil->kode_posyandu }}
                                    </option>
                                @endforeach
                                @if ($errors->has('kode_posyandu'))
                                    <span class="text-danger">{{ $errors->first('kode_posyandu') }}</span>
                                @endif
                            </select>
                        </div>

                        <div class="formbold-w-45">
                            <label for="tgl_informasi" class="formbold-form-label"> tgl_informasi </label>
                            <input type="date" name="tgl_informasi" id="tgl_informasi" class="formbold-form-input" />
                            @if ($errors->has('date'))
                                <span class="text-danger">{{ $errors->first('date') }}</span>
                            @endif
                        </div>
                    </div>
@endsection

@section('title')
    Form Data Bumil
@endsection


<!-- MAIN -->

@section('isi')
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
                            <label for="suami" class="formbold-form-label"> Suami </label>
                            <input type="text" name="suami" id="suami" class="formbold-form-input" />
                            @if ($errors->has('suami'))
                                <span class="text-danger">{{ $errors->first('suami') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="alamat" class="formbold-form-label"> Alamat </label>
                            <input type="text" name="alamat" id="alamat" class="formbold-form-input" />
                            @if ($errors->has('alamat'))
                                <span class="text-danger">{{ $errors->first('alamat') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="user_id_pelapor" class="formbold-form-label">user_id_pelapor</label>
                            <input type="text" name="user_id_pelapor" id="user_id_pelapor"
                                class="formbold-form-input" />
                            @if ($errors->has('user_id_pelapor'))
                                <span class="text-danger">{{ $errors->first('user_id_pelapor') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="verifikasi" class="formbold-form-label"> verifikasi </label>
                            <input type="text" name="verifikasi" id="verifikasi" class="formbold-form-input" />
                            @if ($errors->has('verifikasi'))
                                <span class="text-danger">{{ $errors->first('verifikasi') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="lat" class="formbold-form-label">lat</label>
                            <input type="text" name="lat" id="lat" class="formbold-form-input" />
                            @if ($errors->has('lat'))
                                <span class="text-danger">{{ $errors->first('lat') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="lng" class="formbold-form-label"> lng </label>
                            <input type="text" name="lng" id="lng" class="formbold-form-input" />
                            @if ($errors->has('lng'))
                                <span class="text-danger">{{ $errors->first('lng') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="nama" class="formbold-form-label">nama</label>
                            <input type="text" name="nama" id="nama" class="formbold-form-input" />
                            @if ($errors->has('nama'))
                                <span class="text-danger">{{ $errors->first('nama') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="no_telepon" class="formbold-form-label"> no_telepon </label>
                            <input type="text" name="no_telepon" id="no_telepon" class="formbold-form-input" />
                            @if ($errors->has('no_telepon'))
                                <span class="text-danger">{{ $errors->first('no_telepon') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="no_index_infobumil" class="formbold-form-label">no_index_bumil</label>
                            <input type="text" name="no_index_infobumil" id="no_index_infobumil"
                                class="formbold-form-input" />
                            @if ($errors->has('no_index_infobumil'))
                                <span class="text-danger">{{ $errors->first('no_index_infobumil') }}</span>
                            @endif
                        </div>

                    </div>

                </div>


                <div class="formbold-btn-wrapper">
                    <button type="botton" class="button-modal formbold-btn save" data-bs-toggle="modal"
                        data-bs-target="#exampleModal-2">
                        Simpan
                    </button>
                    <a href="{{ route('indexbumil') }}" class="button-modal formbold-btn cancel"
                        style="text-decoration: none;">
                        Batal
                    </a>
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
                                <button type="submit" class="btn btn-primary w-25"
                                    style=" #ffffff; text-decoration: none;" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal-2">
                                    ya
                                </button>
                                {{-- <button type="button" class="btn btn-primary w-25">
                                  <a href="{{ route('dataBumil') }}" style="color: #ffffff; text-decoration: none;">Ya</a>
                                </button> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection
