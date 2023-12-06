@extends('master.layoutsAdmin')

@section('link')
    <link rel="stylesheet" href="{{ asset('css/formData.css') }}">
@endsection

@section('title')
    Form Data Bumil
@endsection


<!-- MAIN -->

@section('isi')
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">
            <h2 class="formbold-heading">Tambah Data Ibu Hamil</h2>
            <form action="{{ route('updateinfobumil', $infoeditawalbumil->no_index_infobumil) }}"
                enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="color-container">
                    <h5 class="sub-header">Data Diri Ibu Hamil</h5>


                    <div class="formbold-input-flex">
                        {{-- <div class="formbold-w-45">
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
                        </div> --}}
                        <div class="formbold-w-45">
                            <label for="kode_posyandu" class="formbold-form-label"> Kode posyandu </label>
                            <input type="text" name="kode_posyandu" id="kode_posyandu" class="formbold-form-input"
                                value="{{ old('kode_posyandu', $infoeditawalbumil->kode_posyandu) }}" />
                            @if ($errors->has('kode_posyandu'))
                                <span class="text-danger">{{ $errors->first('kode_posyandu') }}</span>
                            @endif
                        </div>
                        <div class="formbold-w-45">
                            <label for="tgl_informasi" class="formbold-form-label"> tgl_informasi </label>
                            <input type="date" name="tgl_informasi" id="tgl_informasi" class="formbold-form-input"
                                value="{{ old('tgl_informasi', $infoeditawalbumil->tgl_informasi) }}" />
                            @if ($errors->has('date'))
                                <span class="text-danger">{{ $errors->first('date') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="suami" class="formbold-form-label"> Suami </label>
                            <input type="text" name="suami" id="suami" class="formbold-form-input"
                                value="{{ old('suami', $infoeditawalbumil->suami) }}" />
                            @if ($errors->has('suami'))
                                <span class="text-danger">{{ $errors->first('suami') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="alamat" class="formbold-form-label"> Alamat </label>
                            <input type="text" name="alamat" id="alamat" class="formbold-form-input"
                                value="{{ old('alamat', $infoeditawalbumil->alamat) }}" />
                            @if ($errors->has('alamat'))
                                <span class="text-danger">{{ $errors->first('alamat') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="user_id_pelapor" class="formbold-form-label">user_id_pelapor</label>
                            <input type="text" name="user_id_pelapor" id="user_id_pelapor" class="formbold-form-input"
                                value="{{ old('user_id_pelapor', $infoeditawalbumil->user_id_pelapor) }}" />
                            @if ($errors->has('user_id_pelapor'))
                                <span class="text-danger">{{ $errors->first('user_id_pelapor') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="verifikasi" class="formbold-form-label"> verifikasi </label>
                            <input type="text" name="verifikasi" id="verifikasi" class="formbold-form-input"
                                value="{{ old('verifikasi', $infoeditawalbumil->verifikasi) }}" />
                            @if ($errors->has('verifikasi'))
                                <span class="text-danger">{{ $errors->first('verifikasi') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="lat" class="formbold-form-label">lat</label>
                            <input type="text" name="lat" id="lat" class="formbold-form-input"
                                value="{{ old('lat', $infoeditawalbumil->lat) }}" />
                            @if ($errors->has('lat'))
                                <span class="text-danger">{{ $errors->first('lat') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="lng" class="formbold-form-label"> lng </label>
                            <input type="text" name="lng" id="lng" class="formbold-form-input"
                                value="{{ old('lng', $infoeditawalbumil->lng) }}" />
                            @if ($errors->has('lng'))
                                <span class="text-danger">{{ $errors->first('lng') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="nama" class="formbold-form-label">nama</label>
                            <input type="text" name="nama" id="nama" class="formbold-form-input"
                                value="{{ old('nama', $infoeditawalbumil->nama) }}" />
                            @if ($errors->has('nama'))
                                <span class="text-danger">{{ $errors->first('nama') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="no_telepon" class="formbold-form-label"> no_telepon </label>
                            <input type="text" name="no_telepon" id="no_telepon" class="formbold-form-input"
                                value="{{ old('no_telepon', $infoeditawalbumil->no_telepon) }}" />
                            @if ($errors->has('no_telepon'))
                                <span class="text-danger">{{ $errors->first('no_telepon') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="no_index_infobumil" class="formbold-form-label">no_index_bumil</label>
                            <input type="text" name="no_index_infobumil"
                                id="no_index_infobumil"class="formbold-form-input"
                                value="{{ old('no_index_infobumil', $infoeditawalbumil->no_index_infobumil) }}" />
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
                    <a href="{{ route('indexinfoawalbumil') }}" class="button-modal formbold-btn cancel"
                        style="text-decoration: none;">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
