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
                    <h5 class="sub-header">Data bayi</h5>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="no_index_balita" class="formbold-form-label"> no_index_balita </label>
                            <input type="text" name="no_index_balita" id="no_index_balita" class="formbold-form-input" />
                            @if ($errors->has('no_index_balita'))
                                <span class="text-danger">{{ $errors->first('no_index_balita') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="kode_posyandu" class="formbold-form-label"> kode_posyandu
                            </label>
                            <select name="kode_posyandu" id="kode_posyandu" class="formbold-form-input">
                                @foreach ($databumilList as $databayi)
                                    <option value="{{ $databayi->posyandu }}">
                                        {{ $databayi->posyandu }}
                                    </option>
                                @endforeach
                                @if ($errors->has('id_no_index_infobumil'))
                                    <span class="text-danger">{{ $errors->first('id_no_index_infobumil') }}</span>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="no_index" class="formbold-form-label"> no_index </label>
                            <input type="text" name="no_index" id="no_index" class="formbold-form-input" />
                            @if ($errors->has('no_index'))
                                <span class="text-danger">{{ $errors->first('no_index') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="akte" class="formbold-form-label"> akte </label>
                            <input type="text" name="akte" id="akte" class="formbold-form-input" />
                            @if ($errors->has('akte'))
                                <span class="text-danger">{{ $errors->first('akte') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="nokk" class="formbold-form-label"> nokk </label>
                            <input type="text" name="nokk" id="nokk" class="formbold-form-input" />
                            @if ($errors->has('nokk'))
                                <span class="text-danger">{{ $errors->first('nokk') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="nama_bayi" class="formbold-form-label"> nama_bayi </label>
                            <input type="text" name="nama_bayi" id="nama_bayi" class="formbold-form-input" />
                            @if ($errors->has('nama_bayi'))
                                <span class="text-danger">{{ $errors->first('nama_bayi') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="tanggal_lahir" class="formbold-form-label"> tanggal_lahir </label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="formbold-form-input" />
                            @if ($errors->has('tanggal_lahir'))
                                <span class="text-danger">{{ $errors->first('tanggal_lahir') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="bayi_id" class="formbold-form-label"> bayi_id </label>
                            <input type="text" name="bayi_id" id="bayi_id" class="formbold-form-input" />
                            @if ($errors->has('bayi_id'))
                                <span class="text-danger">{{ $errors->first('bayi_id') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="nama_ibu" class="formbold-form-label"> nama_ibu </label>
                            <input type="text" name="nama_ibu" id="nama_ibu" class="formbold-form-input" />
                            @if ($errors->has('nama_ibu'))
                                <span class="text-danger">{{ $errors->first('nama_ibu') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="nama_ayah" class="formbold-form-label"> nama_ayah </label>
                            <input type="text" name="nama_ayah" id="nama_ayah" class="formbold-form-input" />
                            @if ($errors->has('nama_ayah'))
                                <span class="text-danger">{{ $errors->first('nama_ayah') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="gakin" class="formbold-form-label"> gakin </label>
                            <input type="text" name="gakin" id="gakin" class="formbold-form-input" />
                            @if ($errors->has('gakin'))
                                <span class="text-danger">{{ $errors->first('gakin') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="rt" class="formbold-form-label"> rt </label>
                            <input type="text" name="rt" id="rt" class="formbold-form-input" />
                            @if ($errors->has('rt'))
                                <span class="text-danger">{{ $errors->first('rt') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="rw" class="formbold-form-label"> rw </label>
                            <input type="text" name="rw" id="rw" class="formbold-form-input" />
                            @if ($errors->has('rw'))
                                <span class="text-danger">{{ $errors->first('rw') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="tb_terakhir" class="formbold-form-label"> tb_terakhir </label>
                            <input type="text" name="tb_terakhir" id="tb_terakhir" class="formbold-form-input" />
                            @if ($errors->has('tb_terakhir'))
                                <span class="text-danger">{{ $errors->first('tb_terakhir') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="bb_terakhir" class="formbold-form-label"> bb_terakhir </label>
                            <input type="text" name="bb_terakhir" id="bb_terakhir" class="formbold-form-input" />
                            @if ($errors->has('bb_terakhir'))
                                <span class="text-danger">{{ $errors->first('bb_terakhir') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="tanggal_timbang_terakhir" class="formbold-form-label"> tanggal_timbang_terakhir
                            </label>
                            <input type="date" name="tanggal_timbang_terakhir" id="tanggal_timbang_terakhir"
                                class="formbold-form-input" />
                            @if ($errors->has('tanggal_timbang_terakhir'))
                                <span class="text-danger">{{ $errors->first('tanggal_timbang_terakhir') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="stunting" class="formbold-form-label"> stunting </label>
                            <input type="text" name="stunting" id="stunting" class="formbold-form-input" />
                            @if ($errors->has('stunting'))
                                <span class="text-danger">{{ $errors->first('stunting') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="cekidl" class="formbold-form-label"> cekidl </label>
                            <input type="text" name="cekidl" id="cekidl" class="formbold-form-input" />
                            @if ($errors->has('cekidl'))
                                <span class="text-danger">{{ $errors->first('cekidl') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="cekbadutq" class="formbold-form-label"> cekbadutq </label>
                            <input type="text" name="cekbadutq" id="cekbadutq" class="formbold-form-input" />
                            @if ($errors->has('cekbadutq'))
                                <span class="text-danger">{{ $errors->first('cekbadutq') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="status_bbu" class="formbold-form-label"> status_bbu </label>
                            <input type="text" name="status_bbu" id="status_bbu" class="formbold-form-input" />
                            @if ($errors->has('status_bbu'))
                                <span class="text-danger">{{ $errors->first('status_bbu') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="status_tbu" class="formbold-form-label"> status_tbu </label>
                            <input type="text" name="status_tbu" id="status_tbu" class="formbold-form-input" />
                            @if ($errors->has('status_tbu'))
                                <span class="text-danger">{{ $errors->first('status_tbu') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="status_bbtb" class="formbold-form-label"> status_bbtb </label>
                            <input type="text" name="status_bbtb" id="status_bbtb" class="formbold-form-input" />
                            @if ($errors->has('status_bbtb'))
                                <span class="text-danger">{{ $errors->first('status_bbtb') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="tanggal_register" class="formbold-form-label"> tanggal_register </label>
                            <input type="date" name="tanggal_register" id="tanggal_register"
                                class="formbold-form-input" />
                            @if ($errors->has('tanggal_register'))
                                <span class="text-danger">{{ $errors->first('tanggal_register') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="kode_tempat" class="formbold-form-label"> kode_tempat </label>
                            <input type="text" name="kode_tempat" id="kode_tempat" class="formbold-form-input" />
                            @if ($errors->has('kode_tempat'))
                                <span class="text-danger">{{ $errors->first('kode_tempat') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="alamat" class="formbold-form-label"> alamat </label>
                            <input type="text" name="alamat" id="alamat" class="formbold-form-input" />
                            @if ($errors->has('alamat'))
                                <span class="text-danger">{{ $errors->first('alamat') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="kode_wilayah" class="formbold-form-label"> kode_wilayah </label>
                            <input type="text" name="kode_wilayah" id="kode_wilayah" class="formbold-form-input" />
                            @if ($errors->has('kode_wilayah'))
                                <span class="text-danger">{{ $errors->first('kode_wilayah') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="dirujuk" class="formbold-form-label"> dirujuk </label>
                            <input type="text" name="dirujuk" id="dirujuk" class="formbold-form-input" />
                            @if ($errors->has('dirujuk'))
                                <span class="text-danger">{{ $errors->first('dirujuk') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="no_telepon_ortu" class="formbold-form-label"> no_telepon_ortu </label>
                            <input type="text" name="no_telepon_ortu" id="no_telepon_ortu"
                                class="formbold-form-input" />
                            @if ($errors->has('no_telepon_ortu'))
                                <span class="text-danger">{{ $errors->first('no_telepon_ortu') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="kode_suku" class="formbold-form-label"> kode_suku </label>
                            <input type="text" name="kode_suku" id="kode_suku" class="formbold-form-input" />
                            @if ($errors->has('kode_suku'))
                                <span class="text-danger">{{ $errors->first('kode_suku') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="nik" class="formbold-form-label"> nik </label>
                            <input type="text" name="nik" id="nik" class="formbold-form-input" />
                            @if ($errors->has('nik'))
                                <span class="text-danger">{{ $errors->first('nik') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="no_kartu" class="formbold-form-label"> no_kartu </label>
                            <input type="text" name="no_kartu" id="no_kartu" class="formbold-form-input" />
                            @if ($errors->has('no_kartu'))
                                <span class="text-danger">{{ $errors->first('no_kartu') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="nik_ibu" class="formbold-form-label"> nik_ibu </label>
                            <input type="text" name="nik_ibu" id="nik_ibu" class="formbold-form-input" />
                            @if ($errors->has('nik_ibu'))
                                <span class="text-danger">{{ $errors->first('nik_ibu') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="anak_ke" class="formbold-form-label"> anak_ke </label>
                            <input type="text" name="anak_ke" id="anak_ke" class="formbold-form-input" />
                            @if ($errors->has('anak_ke'))
                                <span class="text-danger">{{ $errors->first('anak_ke') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="hb024" class="formbold-form-label"> hb024 </label>
                            <input type="text" name="hb024" id="hb024" class="formbold-form-input" />
                            @if ($errors->has('hb024'))
                                <span class="text-danger">{{ $errors->first('hb024') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="bayi_kategori" class="formbold-form-label"> bayi_kategori </label>
                            <input type="text" name="bayi_kategori" id="bayi_kategori" class="formbold-form-input" />
                            @if ($errors->has('bayi_kategori'))
                                <span class="text-danger">{{ $errors->first('bayi_kategori') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="aktif" class="formbold-form-label"> aktif </label>
                            <input type="text" name="aktif" id="aktif" class="formbold-form-input" />
                            @if ($errors->has('aktif'))
                                <span class="text-danger">{{ $errors->first('aktif') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="jenis_kelamin" class="formbold-form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="formbold-form-input">
                                <option value="pria">Laki-laki</option>
                                <option value="wanita">Perempuan</option>
                            </select>
                            @if ($errors->has('jenis_kelamin'))
                                <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="color-container">
                    <h5 class="sub-header">rekap balita</h5>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="umur_bayi_meniggal" class="formbold-form-label"> umur_bayi_meniggal </label>
                            <input type="text" name="umur_bayi_meniggal" id="umur_bayi_meniggal"
                                class="formbold-form-input" />
                            @if ($errors->has('umur_bayi_meniggal'))
                                <span class="text-danger">{{ $errors->first('umur_bayi_meniggal') }}</span>
                            @endif
                        </div>
                        <div class="formbold-w-45">
                            <label for="tempat_bayi_meniggal" class="formbold-form-label"> tempat_bayi_meniggal </label>
                            <input type="text" name="tempat_bayi_meniggal" id="tempat_bayi_meniggal"
                                class="formbold-form-input" />
                            @if ($errors->has('tempat_bayi_meniggal'))
                                <span class="text-danger">{{ $errors->first('tempat_bayi_meniggal') }}</span>
                            @endif
                        </div>
                        <div class="formbold-w-45">
                            <label for="penyebab_bayi_meniggal" class="formbold-form-label"> penyebab_bayi_meniggal
                            </label>
                            <input type="text" name="penyebab_bayi_meniggal" id="penyebab_bayi_meniggal"
                                class="formbold-form-input" />
                            @if ($errors->has('penyebab_bayi_meniggal'))
                                <span class="text-danger">{{ $errors->first('penyebab_bayi_meniggal') }}</span>
                            @endif
                        </div>
                        <div class="formbold-w-45">
                            <label for="meniggal" class="formbold-form-label"> meniggal </label>
                            <input type="text" name="meniggal" id="meniggal" class="formbold-form-input" />
                            @if ($errors->has('meniggal'))
                                <span class="text-danger">{{ $errors->first('meniggal') }}</span>
                            @endif
                        </div>
                        <div class="formbold-w-45">
                            <label for="tanggal_meniggal" class="formbold-form-label"> tanggal_meniggal </label>
                            <input type="date" name="tanggal_meniggal" id="tanggal_meniggal"
                                class="formbold-form-input" />
                            @if ($errors->has('tanggal_meniggal'))
                                <span class="text-danger">{{ $errors->first('tanggal_meniggal') }}</span>
                            @endif
                        </div>
                        <div class="formbold-w-45">
                            <label for="gizi_buruk" class="formbold-form-label"> gizi_buruk </label>
                            <input type="text" name="gizi_buruk" id="gizi_buruk" class="formbold-form-input" />
                            @if ($errors->has('gizi_buruk'))
                                <span class="text-danger">{{ $errors->first('gizi_buruk') }}</span>
                            @endif
                        </div>
                        <div class="formbold-w-45">
                            <label for="berat_bayi" class="formbold-form-label"> berat_bayi </label>
                            <input type="text" name="berat_bayi" id="berat_bayi" class="formbold-form-input" />
                            @if ($errors->has('berat_bayi'))
                                <span class="text-danger">{{ $errors->first('berat_bayi') }}</span>
                            @endif
                        </div>
                        <div class="formbold-w-45">
                            <label for="linkar_kepala" class="formbold-form-label"> linkar_kepala </label>
                            <input type="text" name="linkar_kepala" id="linkar_kepala" class="formbold-form-input" />
                            @if ($errors->has('linkar_kepala'))
                                <span class="text-danger">{{ $errors->first('linkar_kepala') }}</span>
                            @endif
                        </div>
                        <div class="formbold-w-45">
                            <label for="pindah" class="formbold-form-label"> pindah </label>
                            <input type="text" name="pindah" id="pindah" class="formbold-form-input" />
                            @if ($errors->has('pindah'))
                                <span class="text-danger">{{ $errors->first('pindah') }}</span>
                            @endif
                        </div>
                        <div class="formbold-w-45">
                            <label for="tanggal_pindah" class="formbold-form-label"> tanggal_pindah </label>
                            <input type="date" name="tanggal_pindah" id="tanggal_pindah"
                                class="formbold-form-input" />
                            @if ($errors->has('tanggal_pindah'))
                                <span class="text-danger">{{ $errors->first('tanggal_pindah') }}</span>
                            @endif
                        </div>
                        <div class="formbold-w-45">
                            <label for="status_tumbuh_kembang" class="formbold-form-label"> status_tumbuh_kembang </label>
                            <input type="text" name="status_tumbuh_kembang" id="status_tumbuh_kembang"
                                class="formbold-form-input" />
                            @if ($errors->has('status_tumbuh_kembang'))
                                <span class="text-danger">{{ $errors->first('status_tumbuh_kembang') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="color-container">
                        <h5 class="sub-header">Rekapimunisasi</h5>
                        <div class="formbold-input-flex">
                            <div class="formbold-w-45">
                                <label for="bcg" class="formbold-form-label"> bcg </label>
                                <input type="date" name="bcg" id="bcg" class="formbold-form-input" />
                                @if ($errors->has('bcg'))
                                    <span class="text-danger">{{ $errors->first('bcg') }}</span>
                                @endif
                            </div>

                            <div class="formbold-w-45">
                                <label for="dpt_1" class="formbold-form-label"> dpt_1 </label>
                                <input type="date" name="dpt_1" id="dpt_1" class="formbold-form-input" />
                                @if ($errors->has('dpt_1'))
                                    <span class="text-danger">{{ $errors->first('dpt_1') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="formbold-input-flex">
                            <div class="formbold-w-45">
                                <label for="dpt_2" class="formbold-form-label"> dpt_2 </label>
                                <input type="date" name="dpt_2" id="dpt_2" class="formbold-form-input" />
                                @if ($errors->has('dpt_2'))
                                    <span class="text-danger">{{ $errors->first('dpt_2') }}</span>
                                @endif
                            </div>

                            <div class="formbold-w-45">
                                <label for="dpt_3" class="formbold-form-label"> dpt_3 </label>
                                <input type="date" name="dpt_3" id="dpt_3" class="formbold-form-input" />
                                @if ($errors->has('dpt_3'))
                                    <span class="text-danger">{{ $errors->first('dpt_3') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="formbold-input-flex">
                            <div class="formbold-w-45">
                                <label for="polio_1" class="formbold-form-label"> polio_1 </label>
                                <input type="date" name="polio_1" id="polio_1" class="formbold-form-input" />
                                @if ($errors->has('polio_1'))
                                    <span class="text-danger">{{ $errors->first('polio_1') }}</span>
                                @endif
                            </div>

                            <div class="formbold-w-45">
                                <label for="polio_2" class="formbold-form-label"> polio_2 </label>
                                <input type="date" name="polio_2" id="polio_2" class="formbold-form-input" />
                                @if ($errors->has('polio_2'))
                                    <span class="text-danger">{{ $errors->first('polio_2') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="formbold-input-flex">
                            <div class="formbold-w-45">
                                <label for="polio_3" class="formbold-form-label"> polio_3 </label>
                                <input type="date" name="polio_3" id="polio_3" class="formbold-form-input" />
                                @if ($errors->has('polio_3'))
                                    <span class="text-danger">{{ $errors->first('polio_3') }}</span>
                                @endif
                            </div>

                            <div class="formbold-w-45">
                                <label for="ipv" class="formbold-form-label"> ipv </label>
                                <input type="date" name="ipv" id="ipv" class="formbold-form-input" />
                                @if ($errors->has('ipv'))
                                    <span class="text-danger">{{ $errors->first('ipv') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="formbold-input-flex">
                            <div class="formbold-w-45">
                                <label for="campak" class="formbold-form-label"> campak </label>
                                <input type="date" name="campak" id="campak" class="formbold-form-input" />
                                @if ($errors->has('campak'))
                                    <span class="text-danger">{{ $errors->first('campak') }}</span>
                                @endif
                            </div>

                            <div class="formbold-w-45">
                                <label for="boosterpentavalen" class="formbold-form-label"> boosterpentavalen </label>
                                <input type="date" name="boosterpentavalen" id="boosterpentavalen"
                                    class="formbold-form-input" />
                                @if ($errors->has('boosterpentavalen'))
                                    <span class="text-danger">{{ $errors->first('boosterpentavalen') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="formbold-input-flex">
                            <div class="formbold-w-45">
                                <label for="boostercampak" class="formbold-form-label"> boostercampak </label>
                                <input type="date" name="boostercampak" id="boostercampak"
                                    class="formbold-form-input" />
                                @if ($errors->has('boostercampak'))
                                    <span class="text-danger">{{ $errors->first('boostercampak') }}</span>
                                @endif
                            </div>

                            <div class="formbold-w-45">
                                <label for="hepatitis_0" class="formbold-form-label"> hepatitis_0 </label>
                                <input type="date" name="hepatitis_0" id="hepatitis_0" class="formbold-form-input" />
                                @if ($errors->has('hepatitis_0'))
                                    <span class="text-danger">{{ $errors->first('hepatitis_0') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="formbold-input-flex">
                            <div class="formbold-w-45">
                                <label for="hepatitis_1" class="formbold-form-label"> hepatitis_1 </label>
                                <input type="date" name="hepatitis_1" id="hepatitis_1" class="formbold-form-input" />
                                @if ($errors->has('hepatitis_1'))
                                    <span class="text-danger">{{ $errors->first('hepatitis_1') }}</span>
                                @endif
                            </div>

                            <div class="formbold-w-45">
                                <label for="hepatitis_2" class="formbold-form-label"> hepatitis_2 </label>
                                <input type="date" name="hepatitis_2" id="hepatitis_2" class="formbold-form-input" />
                                @if ($errors->has('hepatitis_2'))
                                    <span class="text-danger">{{ $errors->first('hepatitis_2') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="formbold-input-flex">
                            <div class="formbold-w-45">
                                <label for="hepatitis_3" class="formbold-form-label"> hepatitis_3 </label>
                                <input type="date" name="hepatitis_3" id="hepatitis_3" class="formbold-form-input" />
                                @if ($errors->has('hepatitis_3'))
                                    <span class="text-danger">{{ $errors->first('hepatitis_3') }}</span>
                                @endif
                            </div>

                            <div class="formbold-w-45">
                                <label for="noe_natal_1" class="formbold-form-label"> noe_natal_1 </label>
                                <input type="date" name="noe_natal_1" id="noe_natal_1" class="formbold-form-input" />
                                @if ($errors->has('noe_natal_1'))
                                    <span class="text-danger">{{ $errors->first('noe_natal_1') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="formbold-input-flex">
                            <div class="formbold-w-45">
                                <label for="noe_natal_2" class="formbold-form-label"> noe_natal_2 </label>
                                <input type="date" name="noe_natal_2" id="noe_natal_2" class="formbold-form-input" />
                                @if ($errors->has('noe_natal_2'))
                                    <span class="text-danger">{{ $errors->first('noe_natal_2') }}</span>
                                @endif
                            </div>

                            <div class="formbold-w-45">
                                <label for="noe_natal_3" class="formbold-form-label"> noe_natal_3 </label>
                                <input type="date" name="noe_natal_3" id="noe_natal_3" class="formbold-form-input" />
                                @if ($errors->has('noe_natal_3'))
                                    <span class="text-danger">{{ $errors->first('noe_natal_3') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="color-container">
                        <h5 class="sub-header">Penyakit</h5>
                        <div class="formbold-input-flex">
                            <div class="formbold-w-20">
                                <label for="asfiksia" class="formbold-form-label"> asfiksia </label>
                                <input type="checkbox" name="asfiksia" id="asfiksia" class="formbold-form-input"
                                    value="1" checked>
                                @if ($errors->has('asfiksia'))
                                    <span class="text-danger">{{ $errors->first('asfiksia') }}</span>
                                @endif
                            </div>

                            <div class="formbold-w-20">
                                <label for="hipotermi" class="formbold-form-label"> hipotermi </label>
                                <input type="checkbox" name="hipotermi" id="hipotermi" class="formbold-form-input"
                                    value="1" checked>
                                @if ($errors->has('hipotermi'))
                                    <span class="text-danger">{{ $errors->first('hipotermi') }}</span>
                                @endif
                            </div>
                            <div class="formbold-w-20">
                                <label for="infeksi" class="formbold-form-label"> infeksi </label>
                                <input type="checkbox" name="infeksi" id="infeksi" class="formbold-form-input"
                                    value="1" checked>
                                @if ($errors->has('infeksi'))
                                    <span class="text-danger">{{ $errors->first('infeksi') }}</span>
                                @endif
                            </div>
                            <div class="formbold-w-20">
                                <label for="tetanus" class="formbold-form-label"> tetanus </label>
                                <input type="checkbox" name="tetanus" id="tetanus" class="formbold-form-input"
                                    value="1" checked>
                                @if ($errors->has('tetanus'))
                                    <span class="text-danger">{{ $errors->first('tetanus') }}</span>
                                @endif
                            </div>
                            <div class="formbold-w-20">
                                <label for="bblr" class="formbold-form-label"> bblr </label>
                                <input type="checkbox" name="bblr" id="bblr" class="formbold-form-input"
                                    value="1" checked>
                                @if ($errors->has('bblr'))
                                    <span class="text-danger">{{ $errors->first('bblr') }}</span>
                                @endif
                            </div>
                            <div class="formbold-w-20">
                                <label for="komplikasi_lain" class="formbold-form-label"> komplikasi_lain </label>
                                <input type="checkbox" name="komplikasi_lain" id="komplikasi_lain"
                                    class="formbold-form-input" value="1" checked>
                                @if ($errors->has('komplikasi_lain'))
                                    <span class="text-danger">{{ $errors->first('komplikasi_lain') }}</span>
                                @endif
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
            </form>
        </div>
    </div>
@endsection
