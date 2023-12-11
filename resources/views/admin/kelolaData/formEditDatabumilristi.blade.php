@extends('master.layoutsAdmin')

@section('link')
    <link rel="stylesheet" href="{{ asset('css/formData.css') }}">
@endsection

@section('title')
    Form Data Bumil
@endsection


<!-- MAIN -->
{{-- {{ dd($editbumil->no_index_bumil, $editbumil->id) }} --}}

@section('isi')
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">
            <h2 class="formbold-heading">Tambah Data Ibu Hamil Risti</h2>
            <form action="{{ route('updatebumil',$editbumil->no_index_bumil) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="color-container">
                    <h5 class="sub-header">Data Diri Ibu Hamil</h5>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="no_index_bumil" class="formbold-form-label"> no_index_bumil </label>
                            <input type="text" name="no_index_bumil" id="no_index_bumil" class="formbold-form-input" 
                            value="{{ old('no_index_bumil', $editbumil->no_index_bumil) }}" />
                            @if ($errors->has('no_index_bumil'))
                                <span class="text-danger">{{ $errors->first('no_index_bumil') }}</span>
                            @endif
                        </div>
                        <div class="formbold-w-45">
                            <label for="id_no_index_infobumil" class="formbold-form-label"> no_index_INFO AWAL bumil </label>
                            <input type="text" name="id_no_index_infobumil" id="id_no_index_infobumil" class="formbold-form-input"
                                value="{{ old('id_no_index_infobumil', $editbumil->id_no_index_infobumil) }}" />
                            @if ($errors->has('id_no_index_infobumil'))
                                <span class="text-danger">{{ $errors->first('id_no_index_infobumil') }}</span>
                            @endif
                        </div>
                        {{-- <div class="formbold-w-45">
                            <label for="id_no_index_infobumil" class="formbold-form-label"> no_index_INFO AWAL bumil
                            </label>
                            <select name="id_no_index_infobumil" id="id_no_index_infobumil" class="formbold-form-input">
                                @foreach ($databumilList as $databumil)
                                    <option value="{{ $databumil->no_index_infobumil }}">
                                        {{ $databumil->no_index_infobumil }}
                                    </option>
                                @endforeach
                                @if ($errors->has('id_no_index_infobumil'))
                                    <span class="text-danger">{{ $errors->first('id_no_index_infobumil') }}</span>
                                @endif
                            </select>
                        </div> --}}
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="tgl_register" class="formbold-form-label"> tgl_register </label>
                            <input type="date" name="tgl_register" id="tgl_register" class="formbold-form-input" 
                            value="{{ old('tgl_register', $editbumil->tgl_register) }}"/>
                            @if ($errors->has('tgl_register'))
                                <span class="text-danger">{{ $errors->first('tgl_register') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="tgl_lahir" class="formbold-form-label"> tgl_lahir </label>
                            <input type="date" name="tgl_lahir" id="tgl_lahir" class="formbold-form-input" 
                            value="{{ old('tgl_lahir', $editbumil->tgl_lahir) }}"/>
                            @if ($errors->has('tgl_lahir'))
                                <span class="text-danger">{{ $errors->first('tgl_lahir') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="bbawal" class="formbold-form-label">bbawal</label>
                            <input type="text" name="bbawal" id="bbawal" class="formbold-form-input" 
                            value="{{ old('bbawal', $editbumil->bbawal) }}"/>
                            @if ($errors->has('bbawal'))
                                <span class="text-danger">{{ $errors->first('bbawal') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="umur" class="formbold-form-label"> umur </label>
                            <input type="text" name="umur" id="umur" class="formbold-form-input" 
                            value="{{ old('umur', $editbumil->umur) }}"/>
                            @if ($errors->has('umur'))
                                <span class="text-danger">{{ $errors->first('umur') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="umur_kehamilan" class="formbold-form-label">umur_kehamilan</label>
                            <input type="text" name="umur_kehamilan" id="umur_kehamilan" class="formbold-form-input" 
                            value="{{ old('umur_kehamilan', $editbumil->umur_kehamilan) }}"/>
                            @if ($errors->has('umur_kehamilan'))
                                <span class="text-danger">{{ $errors->first('umur_kehamilan') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="jenis_persalinan" class="formbold-form-label"> jenis_persalinan </label>
                            <input type="text" name="jenis_persalinan" id="jenis_persalinan" class="formbold-form-input" 
                                value="{{ old('jenis_persalinan', $editbumil->jenis_persalinan) }}"/>
                            @if ($errors->has('jenis_persalinan'))
                                <span class="text-danger">{{ $errors->first('jenis_persalinan') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="no_telepon_istri" class="formbold-form-label">no_telepon_istri</label>
                            <input type="text" name="no_telepon_istri" id="no_telepon_istri" class="formbold-form-input" 
                            value="{{ old('no_telepon_istri', $editbumil->no_telepon_istri) }}"/>
                            @if ($errors->has('no_telepon_istri'))
                                <span class="text-danger">{{ $errors->first('no_telepon_istri') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="htp" class="formbold-form-label"> htp </label>
                            <input type="date" name="htp" id="htp" class="formbold-form-input" 
                            value="{{ old('htp', $editbumil->htp) }}"/>
                            @if ($errors->has('htp'))
                                <span class="text-danger">{{ $errors->first('htp') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="g" class="formbold-form-label">g</label>
                            <input type="text" name="g" id="g" class="formbold-form-input" 
                            value="{{ old('g', $editbumil->g) }}"/>
                            @if ($errors->has('g'))
                                <span class="text-danger">{{ $errors->first('g') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="p" class="formbold-form-label"> p </label>
                            <input type="text" name="p" id="p" class="formbold-form-input" 
                            value="{{ old('p', $editbumil->p) }}"/>
                            @if ($errors->has('p'))
                                <span class="text-danger">{{ $errors->first('p') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="a" class="formbold-form-label">a</label>
                            <input type="text" name="a" id="a" class="formbold-form-input" 
                            value="{{ old('a', $editbumil->a) }}"/>
                            @if ($errors->has('a'))
                                <span class="text-danger">{{ $errors->first('a') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="lila" class="formbold-form-label"> lila </label>
                            <input type="text" name="lila" id="lila" class="formbold-form-input" 
                            value="{{ old('lila', $editbumil->lila) }}"/>
                            @if ($errors->has('lila'))
                                <span class="text-danger">{{ $errors->first('lila') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="sistole_akhir" class="formbold-form-label">sistole_akhir</label>
                            <input type="text" name="sistole_akhir" id="sistole_akhir" class="formbold-form-input" 
                            value="{{ old('sistole_akhir', $editbumil->sistole_akhir) }}"/>
                            @if ($errors->has('sistole_akhir'))
                                <span class="text-danger">{{ $errors->first('sistole_akhir') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="diastole_akhir" class="formbold-form-label"> diastole_akhir </label>
                            <input type="text" name="diastole_akhir" id="diastole_akhir"
                                class="formbold-form-input" 
                                value="{{ old('diastole_akhir', $editbumil->diastole_akhir) }}"/>
                            @if ($errors->has('diastole_akhir'))
                                <span class="text-danger">{{ $errors->first('diastole_akhir') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="hb_akhir" class="formbold-form-label">hb_akhir</label>
                            <input type="text" name="hb_akhir" id="hb_akhir" class="formbold-form-input" 
                            value="{{ old('hb_akhir', $editbumil->hb_akhir) }}"/>
                            @if ($errors->has('hb_akhir'))
                                <span class="text-danger">{{ $errors->first('hb_akhir') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="rt" class="formbold-form-label"> rt </label>
                            <input type="text" name="rt" id="rt" class="formbold-form-input" 
                            value="{{ old('rt', $editbumil->rt) }}"/>
                            @if ($errors->has('rt'))
                                <span class="text-danger">{{ $errors->first('rt') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="rw" class="formbold-form-label">rw</label>
                            <input type="text" name="rw" id="rw" class="formbold-form-input" 
                            value="{{ old('rw', $editbumil->rw) }}"/>
                            @if ($errors->has('rw'))
                                <span class="text-danger">{{ $errors->first('rw') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="tanggal_melahirkan" class="formbold-form-label"> tanggal_melahirkan </label>
                            <input type="date" name="tanggal_melahirkan" id="tanggal_melahirkan"
                                class="formbold-form-input" 
                                value="{{ old('tanggal_melahirkan', $editbumil->tanggal_melahirkan) }}"/>
                            @if ($errors->has('tanggal_melahirkan'))
                                <span class="text-danger">{{ $errors->first('tanggal_melahirkan') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="penolong" class="formbold-form-label">penolong</label>
                            <input type="text" name="penolong" id="penolong" class="formbold-form-input" 
                            value="{{ old('penolong', $editbumil->penolong) }}"/>
                            @if ($errors->has('penolong'))
                                <span class="text-danger">{{ $errors->first('penolong') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="cara_lahir" class="formbold-form-label"> cara_lahir </label>
                            <input type="text" name="cara_lahir" id="cara_lahir" class="formbold-form-input" 
                            value="{{ old('cara_lahir', $editbumil->cara_lahir) }}"/>
                            @if ($errors->has('cara_lahir'))
                                <span class="text-danger">{{ $errors->first('cara_lahir') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="kondisi_bayi" class="formbold-form-label">kondisi_bayi</label>
                            <input type="text" name="kondisi_bayi" id="kondisi_bayi" class="formbold-form-input" 
                            value="{{ old('kondisi_bayi', $editbumil->kondisi_bayi) }}"/>
                            @if ($errors->has('kondisi_bayi'))
                                <span class="text-danger">{{ $errors->first('kondisi_bayi') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="kondisi_ibu" class="formbold-form-label"> kondisi_ibu </label>
                            <input type="text" name="kondisi_ibu" id="kondisi_ibu" class="formbold-form-input" 
                            value="{{ old('kondisi_ibu', $editbumil->kondisi_ibu) }}"/>
                            @if ($errors->has('kondisi_ibu'))
                                <span class="text-danger">{{ $errors->first('kondisi_ibu') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="konseling_pasca_salin" class="formbold-form-label">konseling_pasca_salin</label>
                            <input type="text" name="konseling_pasca_salin" id="konseling_pasca_salin"
                                class="formbold-form-input" 
                                value="{{ old('konseling_pasca_salin', $editbumil->konseling_pasca_salin) }}"/>
                            @if ($errors->has('konseling_pasca_salin'))
                                <span class="text-danger">{{ $errors->first('konseling_pasca_salin') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="jenis_gakin" class="formbold-form-label"> jenis_gakin </label>
                            <input type="text" name="jenis_gakin" id="jenis_gakin" class="formbold-form-input" 
                            value="{{ old('jenis_gakin', $editbumil->jenis_gakin) }}"/>
                            @if ($errors->has('jenis_gakin'))
                                <span class="text-danger">{{ $errors->first('jenis_gakin') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="jenisristi" class="formbold-form-label">jenisristi</label>
                            <input type="text" name="jenisristi" id="jenisristi" class="formbold-form-input" 
                            value="{{ old('jenisristi', $editbumil->jenisristi) }}"/>
                            @if ($errors->has('jenisristi'))
                                <span class="text-danger">{{ $errors->first('jenisristi') }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="color-container">
                    <h5 class="sub-header">Periksa Bumil</h5>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="tanggal_periksa" class="formbold-form-label"> tanggal_periksa </label>
                            <input type="date" name="tanggal_periksa" id="tanggal_periksa"
                                class="formbold-form-input" 
                                value="{{ old('tanggal_periksa', $editbumil->periksabumil->tanggal_periksa) }}"/>
                            @if ($errors->has('tanggal_periksa'))
                                <span class="text-danger">{{ $errors->first('tanggal_periksa') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="jenis_periksa" class="formbold-form-label"> jenis_periksa </label>
                            <input type="text" name="jenis_periksa" id="jenis_periksa" class="formbold-form-input" 
                            value="{{ old('jenis_periksa', $editbumil->periksabumil->jenis_periksa) }}"/>
                            @if ($errors->has('jenis_periksa'))
                                <span class="text-danger">{{ $errors->first('jenis_periksa') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="tempat_periksa" class="formbold-form-label"> tempat_periksa </label>
                            <input type="text" name="tempat_periksa" id="tempat_periksa"
                                class="formbold-form-input" 
                                value="{{ old('tempat_periksa', $editbumil->periksabumil->tempat_periksa) }}"/>
                            @if ($errors->has('tempat_periksa'))
                                <span class="text-danger">{{ $errors->first('tempat_periksa') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="luar_gedung" class="formbold-form-label"> luar_gedung </label>
                            <input type="text" name="luar_gedung" id="luar_gedung" class="formbold-form-input" 
                            value="{{ old('luar_gedung', $editbumil->periksabumil->luar_gedung) }}"/>
                            @if ($errors->has('luar_gedung'))
                                <span class="text-danger">{{ $errors->first('luar_gedung') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="kode_petugas" class="formbold-form-label"> kode_petugas </label>
                            <input type="text" name="kode_petugas" id="kode_petugas" class="formbold-form-input" 
                            value="{{ old('kode_petugas', $editbumil->periksabumil->kode_petugas) }}"/>
                            @if ($errors->has('kode_petugas'))
                                <span class="text-danger">{{ $errors->first('kode_petugas') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="umur_kehamilan" class="formbold-form-label"> umur_kehamilan </label>
                            <input type="text" name="umur_kehamilan" id="umur_kehamilan"
                                class="formbold-form-input" 
                                value="{{ old('umur_kehamilan', $editbumil->periksabumil->umur_kehamilan) }}"/>
                            @if ($errors->has('umur_kehamilan'))
                                <span class="text-danger">{{ $errors->first('umur_kehamilan') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="keluhan" class="formbold-form-label"> keluhan </label>
                            <input type="text" name="keluhan" id="keluhan" class="formbold-form-input" 
                            value="{{ old('keluhan', $editbumil->periksabumil->keluhan) }}"/>
                            @if ($errors->has('keluhan'))
                                <span class="text-danger">{{ $errors->first('keluhan') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="lila" class="formbold-form-label"> lila </label>
                            <input type="text" name="lila" id="lila" class="formbold-form-input" 
                            value="{{ old('lila', $editbumil->periksabumil->lila) }}"/>
                            @if ($errors->has('lila'))
                                <span class="text-danger">{{ $errors->first('lila') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="sistole" class="formbold-form-label"> sistole </label>
                            <input type="text" name="sistole" id="sistole" class="formbold-form-input" 
                            value="{{ old('sistole', $editbumil->periksabumil->sistole) }}"/>
                            @if ($errors->has('sistole'))
                                <span class="text-danger">{{ $errors->first('sistole') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="diastole" class="formbold-form-label"> diastole </label>
                            <input type="text" name="diastole" id="diastole" class="formbold-form-input" 
                            value="{{ old('diastole', $editbumil->periksabumil->diastole) }}"/>
                            @if ($errors->has('diastole'))
                                <span class="text-danger">{{ $errors->first('diastole') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="hb" class="formbold-form-label"> hb </label>
                            <input type="text" name="hb" id="hb" class="formbold-form-input" 
                            value="{{ old('hb', $editbumil->periksabumil->hb) }}"/>
                            @if ($errors->has('hb'))
                                <span class="text-danger">{{ $errors->first('hb') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="berad_badan" class="formbold-form-label"> berad_badan </label>
                            <input type="text" name="berad_badan" id="berad_badan" class="formbold-form-input" 
                            value="{{ old('berad_badan', $editbumil->periksabumil->berad_badan) }}"/>
                            @if ($errors->has('berad_badan'))
                                <span class="text-danger">{{ $errors->first('berad_badan') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="tinggi_fundus" class="formbold-form-label"> tinggi_fundus </label>
                            <input type="text" name="tinggi_fundus" id="tinggi_fundus" class="formbold-form-input" 
                            value="{{ old('tinggi_fundus', $editbumil->periksabumil->tinggi_fundus) }}"/>
                            @if ($errors->has('tinggi_fundus'))
                                <span class="text-danger">{{ $errors->first('tinggi_fundus') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="jumlah_janin" class="formbold-form-label"> jumlah_janin </label>
                            <input type="text" name="jumlah_janin" id="jumlah_janin" class="formbold-form-input" 
                            value="{{ old('jumlah_janin', $editbumil->periksabumil->jumlah_janin) }}"/>
                            @if ($errors->has('jumlah_janin'))
                                <span class="text-danger">{{ $errors->first('jumlah_janin') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="letak_janin" class="formbold-form-label"> letak_janin </label>
                            <input type="text" name="letak_janin" id="letak_janin" class="formbold-form-input" 
                            value="{{ old('letak_janin', $editbumil->periksabumil->letak_janin) }}"/>
                            @if ($errors->has('letak_janin'))
                                <span class="text-danger">{{ $errors->first('letak_janin') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="denyut_janin" class="formbold-form-label"> denyut_janin </label>
                            <input type="text" name="denyut_janin" id="denyut_janin" class="formbold-form-input" 
                            value="{{ old('denyut_janin', $editbumil->periksabumil->denyut_janin) }}"/>
                            @if ($errors->has('denyut_janin'))
                                <span class="text-danger">{{ $errors->first('denyut_janin') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="lab" class="formbold-form-label"> lab </label>
                            <input type="text" name="lab" id="lab" class="formbold-form-input" 
                            value="{{ old('lab', $editbumil->periksabumil->lab) }}"/>
                            @if ($errors->has('lab'))
                                <span class="text-danger">{{ $errors->first('lab') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="yodium" class="formbold-form-label"> yodium </label>
                            <input type="text" name="yodium" id="yodium" class="formbold-form-input" 
                            value="{{ old('yodium', $editbumil->periksabumil->yodium) }}"/>
                            @if ($errors->has('yodium'))
                                <span class="text-danger">{{ $errors->first('yodium') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="tindakan_fe" class="formbold-form-label"> tindakan_fe </label>
                            <input type="text" name="tindakan_fe" id="tindakan_fe" class="formbold-form-input" 
                            value="{{ old('tindakan_fe', $editbumil->periksabumil->tindakan_fe) }}"/>
                            @if ($errors->has('tindakan_fe'))
                                <span class="text-danger">{{ $errors->first('tindakan_fe') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="fe1" class="formbold-form-label"> fe1 </label>
                            <input type="text" name="fe1" id="fe1" class="formbold-form-input" 
                            value="{{ old('fe1', $editbumil->periksabumil->fe1) }}"/>
                            @if ($errors->has('fe1'))
                                <span class="text-danger">{{ $errors->first('fe1') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="fe2" class="formbold-form-label"> fe2 </label>
                            <input type="text" name="fe2" id="fe2" class="formbold-form-input" 
                            value="{{ old('fe2', $editbumil->periksabumil->fe2) }}"/>
                            @if ($errors->has('fe2'))
                                <span class="text-danger">{{ $errors->first('fe2') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="fe3" class="formbold-form-label"> fe3 </label>
                            <input type="text" name="fe3" id="fe3" class="formbold-form-input" 
                            value="{{ old('fe3', $editbumil->periksabumil->fe3) }}"/>
                            @if ($errors->has('fe3'))
                                <span class="text-danger">{{ $errors->first('fe3') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="tindakan_tt" class="formbold-form-label"> tindakan_tt </label>
                            <input type="text" name="tindakan_tt" id="tindakan_tt" class="formbold-form-input" 
                            value="{{ old('tindakan_tt', $editbumil->periksabumil->tindakan_tt) }}"/>
                            @if ($errors->has('tindakan_tt'))
                                <span class="text-danger">{{ $errors->first('tindakan_tt') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="tt1" class="formbold-form-label"> tt1 </label>
                            <input type="text" name="tt1" id="tt1" class="formbold-form-input" 
                            value="{{ old('tt1', $editbumil->periksabumil->tt1) }}"/>
                            @if ($errors->has('tt1'))
                                <span class="text-danger">{{ $errors->first('tt1') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="tt2" class="formbold-form-label"> tt2 </label>
                            <input type="text" name="tt2" id="tt2" class="formbold-form-input" 
                            value="{{ old('tt2', $editbumil->periksabumil->tt2) }}"/>
                            @if ($errors->has('tt2'))
                                <span class="text-danger">{{ $errors->first('tt2') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="tt3" class="formbold-form-label"> tt3 </label>
                            <input type="text" name="tt3" id="tt3" class="formbold-form-input" 
                            value="{{ old('tt3', $editbumil->periksabumil->tt3) }}"/>
                            @if ($errors->has('tt3'))
                                <span class="text-danger">{{ $errors->first('tt3') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="dirujuk" class="formbold-form-label"> dirujuk </label>
                            <input type="text" name="dirujuk" id="dirujuk" class="formbold-form-input" 
                            value="{{ old('dirujuk', $editbumil->periksabumil->dirujuk) }}"/>
                            @if ($errors->has('dirujuk'))
                                <span class="text-danger">{{ $errors->first('dirujuk') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="posisitbj" class="formbold-form-label"> posisitbj </label>
                            <input type="text" name="posisitbj" id="posisitbj" class="formbold-form-input" 
                            value="{{ old('posisitbj', $editbumil->periksabumil->posisitbj) }}"/>
                            @if ($errors->has('posisitbj'))
                                <span class="text-danger">{{ $errors->first('posisitbj') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="tbj" class="formbold-form-label"> tbj </label>
                            <input type="text" name="tbj" id="tbj" class="formbold-form-input" 
                            value="{{ old('tbj', $editbumil->periksabumil->tbj) }}"/>
                            @if ($errors->has('tbj'))
                                <span class="text-danger">{{ $errors->first('tbj') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="kodefe" class="formbold-form-label"> kodefe </label>
                            <input type="text" name="kodefe" id="kodefe" class="formbold-form-input" 
                            value="{{ old('kodefe', $editbumil->periksabumil->kodefe) }}"/>
                            @if ($errors->has('kodefe'))
                                <span class="text-danger">{{ $errors->first('kodefe') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="jumlahfe" class="formbold-form-label"> jumlahfe </label>
                            <input type="text" name="jumlahfe" id="jumlahfe" class="formbold-form-input" 
                            value="{{ old('jumlahfe', $editbumil->periksabumil->jumlahfe) }}"/>
                            @if ($errors->has('jumlahfe'))
                                <span class="text-danger">{{ $errors->first('jumlahfe') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="obatcacing" class="formbold-form-label"> obatcacing </label>
                            <input type="text" name="obatcacing" id="obatcacing" class="formbold-form-input" 
                            value="{{ old('obatcacing', $editbumil->periksabumil->obatcacing) }}"/>
                            @if ($errors->has('obatcacing'))
                                <span class="text-danger">{{ $errors->first('obatcacing') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="tt4" class="formbold-form-label"> tt4 </label>
                            <input type="text" name="tt4" id="tt4" class="formbold-form-input" 
                            value="{{ old('tt4', $editbumil->periksabumil->tt4) }}"/>
                            @if ($errors->has('tt4'))
                                <span class="text-danger">{{ $errors->first('tt4') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="tt5" class="formbold-form-label"> tt5 </label>
                            <input type="text" name="tt5" id="tt5" class="formbold-form-input" 
                            value="{{ old('tt5', $editbumil->periksabumil->tt5) }}"/>
                            @if ($errors->has('tt5'))
                                <span class="text-danger">{{ $errors->first('tt5') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="hbsag" class="formbold-form-label"> hbsag </label>
                            <input type="text" name="hbsag" id="hbsag" class="formbold-form-input" 
                            value="{{ old('hbsag', $editbumil->periksabumil->hbsag) }}"/>
                            @if ($errors->has('hbsag'))
                                <span class="text-danger">{{ $errors->first('hbsag') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="rapid_test" class="formbold-form-label"> rapid_test </label>
                            <input type="text" name="rapid_test" id="rapid_test" class="formbold-form-input" 
                            value="{{ old('rapid_test', $editbumil->periksabumil->rapid_test) }}"/>
                            @if ($errors->has('rapid_test'))
                                <span class="text-danger">{{ $errors->first('rapid_test') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="protein_urine" class="formbold-form-label"> protein_urine </label>
                            <input type="text" name="protein_urine" id="protein_urine" class="formbold-form-input" 
                            value="{{ old('protein_urine', $editbumil->periksabumil->protein_urine) }}"/>
                            @if ($errors->has('protein_urine'))
                                <span class="text-danger">{{ $errors->first('protein_urine') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="gds" class="formbold-form-label"> gds </label>
                            <input type="text" name="gds" id="gds" class="formbold-form-input" 
                            value="{{ old('gds', $editbumil->periksabumil->gds) }}"/>
                            @if ($errors->has('gds'))
                                <span class="text-danger">{{ $errors->first('gds') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="ims" class="formbold-form-label"> ims </label>
                            <input type="text" name="ims" id="ims" class="formbold-form-input" 
                            value="{{ old('ims', $editbumil->periksabumil->ims) }}"/>
                            @if ($errors->has('ims'))
                                <span class="text-danger">{{ $errors->first('ims') }}</span>
                            @endif
                        </div>

                        <div class="formbold-w-45">
                            <label for="nama" class="formbold-form-label"> nama </label>
                            <input type="text" name="nama" id="nama" class="formbold-form-input" 
                            value="{{ old('nama', $editbumil->periksabumil->nama) }}"/>
                            @if ($errors->has('nama'))
                                <span class="text-danger">{{ $errors->first('nama') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div class="formbold-w-45">
                            <label for="posisi_janin" class="formbold-form-label"> posisi_janin </label>
                            <input type="text" name="posisi_janin" id="posisi_janin" class="formbold-form-input" 
                            value="{{ old('posisi_janin', $editbumil->periksabumil->posisi_janin) }}"/>
                            @if ($errors->has('posisi_janin'))
                                <span class="text-danger">{{ $errors->first('posisi_janin') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="color-container">
                    <h5 class="sub-header">Jenis Risti</h5>
                    <div class="row justify-content-center" style="width: 80%">
                        <div class="col-md-2">
                            <input type="checkbox" name="resiko1" id="resiko10" class="form-check-input"
                                   value="1" {{ old('resiko1', $editbumil->resiko1) == 1 ? 'checked' : '' }}>
                            <label for="resiko1" class="form-check-label"> Resiko 1 </label>
                                   @if ($errors->has('resiko1'))
                                <span class="text-danger">{{ $errors->first('resiko1') }}</span>
                            @endif
                        </div>
                        <div class="col-md-2">
                            <input type="checkbox" name="resiko2" id="resiko2" class="form-check-input"
                                value="1" {{ old('resiko2', $editbumil->resiko2) == 1 ? 'checked' : '' }}>
                            <label for="resiko2" class="form-check-label"> Resiko 2 </label>
                                @if ($errors->has('resiko2'))
                                <span class="text-danger">{{ $errors->first('resiko2') }}</span>
                            @endif
                        </div>
                        <div class="col-md-2">
                            <input type="checkbox" name="resiko3" id="resiko3" class="form-check-input"
                                value="1" {{ old('resiko3', $editbumil->resiko3) == 1 ? 'checked' : '' }}>
                            <label for="resiko3" class="form-check-label"> Resiko 3 </label>
                                @if ($errors->has('resiko3'))
                                <span class="text-danger">{{ $errors->first('resiko3') }}</span>
                            @endif
                        </div>
                        <div class="col-md-2">
                            <input type="checkbox" name="resiko4" id="resiko4" class="form-check-input"
                                value="1" {{ old('resiko4', $editbumil->resiko4) == 1 ? 'checked' : '' }}>
                            <label for="resiko4" class="form-check-label"> Resiko 4 </label>
                                @if ($errors->has('resiko4'))
                                <span class="text-danger">{{ $errors->first('resiko4') }}</span>
                            @endif
                        </div>
                        <div class="col-md-2">
                            <input type="checkbox" name="resiko5" id="resiko5" class="form-check-input"
                                value="1" {{ old('resiko5', $editbumil->resiko5) == 1 ? 'checked' : '' }}>
                            <label for="resiko5" class="form-check-label"> Resiko 5 </label>
                                @if ($errors->has('resiko5'))
                                <span class="text-danger">{{ $errors->first('resiko5') }}</span>
                            @endif
                        </div>
                        <div class="col-md-2">
                            <input type="checkbox" name="resiko6" id="resiko6" class="form-check-input"
                                value="1" {{ old('resiko6', $editbumil->resiko6) == 1 ? 'checked' : '' }}>
                            <label for="resiko6" class="form-check-label"> Resiko 6 </label>
                                @if ($errors->has('resiko6'))
                                <span class="text-danger">{{ $errors->first('resiko6') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row justify-content" style="width: 80%; margin-top:20px">
                        <div class="col-md-2">
                            <input type="checkbox" name="resiko7" id="resiko7" class="form-check-input"
                                value="1" {{ old('resiko7', $editbumil->resiko7) == 1 ? 'checked' : '' }}>
                            <label for="resiko7" class="form-check-label"> Resiko 7 </label>
                            @if ($errors->has('resiko7'))
                                <span class="text-danger">{{ $errors->first('resiko7') }}</span>
                            @endif
                        </div>
                        <div class="col-md-2">
                            <input type="checkbox" name="resiko8" id="resiko8" class="form-check-input"
                                value="1" {{ old('resiko8', $editbumil->resiko8) == 1 ? 'checked' : '' }}>
                            <label for="resiko8" class="form-check-label"> Resiko 8 </label>
                            @if ($errors->has('resiko8'))
                                <span class="text-danger">{{ $errors->first('resiko8') }}</span>
                            @endif
                        </div>
                        <div class="col-md-2">
                            <input type="checkbox" name="resiko9" id="resiko9" class="form-check-input"
                                value="1" {{ old('resiko9', $editbumil->resiko9) == 1 ? 'checked' : '' }}>
                            <label for="resiko9" class="form-check-label"> Resiko 9 </label>
                            @if ($errors->has('resiko9'))
                                <span class="text-danger">{{ $errors->first('resiko9') }}</span>
                            @endif
                        </div>
                        <div class="col-md-2">
                            <input type="checkbox" name="resiko10" id="resiko10" class="form-check-input"
                                value="1" {{ old('resiko10', $editbumil->resiko10) == 1 ? 'checked' : '' }}>
                            <label for="resiko10" class="form-check-label"> Resiko 10 </label>
                            @if ($errors->has('resiko10'))
                                <span class="text-danger">{{ $errors->first('resiko10') }}</span>
                            @endif
                        </div>
                        <div class="col-md-2">
                            <input type="checkbox" name="resiko11" id="resiko11" class="form-check-input"
                                value="1" {{ old('resiko11', $editbumil->resiko11) == 1 ? 'checked' : '' }}>
                            <label for="resiko11" class="form-check-label"> Resiko 11 </label>
                            @if ($errors->has('resiko11'))
                                <span class="text-danger">{{ $errors->first('resiko11') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="color-container">
                    <h5 class="sub-header">Jenis Faktor</h5>
                    <div class="row justify-content" style="width: 80%; margin-top:20px">
                        <div class="col-md-2">
                            <input type="checkbox" name="faktor1" id="faktor1" class="form-check-input"
                                value="1" {{ old('faktor1', $editbumil->jenisfaktor->faktor1) == 1 ? 'checked' : '' }}>
                            <label for="faktor1" class="form-check-label"> Faktor 1 </label>
                            @if ($errors->has('faktor1'))
                                <span class="text-danger">{{ $errors->first('faktor1') }}</span>
                            @endif
                        </div>

                        <div class="col-md-2">
                            <input type="checkbox" name="faktor2" id="faktor2" class="form-check-input"
                                value="1" {{ old('faktor2', $editbumil->jenisfaktor->faktor2) == 1 ? 'checked' : '' }}>
                            <label for="faktor2" class="form-check-label"> Faktor 2 </label>
                            @if ($errors->has('faktor2'))
                                <span class="text-danger">{{ $errors->first('faktor2') }}</span>
                            @endif
                        </div>
                        <div class="col-md-2">
                            <input type="checkbox" name="faktor3" id="faktor3" class="form-check-input"
                                value="1" {{ old('faktor3', $editbumil->jenisfaktor->faktor3) == 1 ? 'checked' : '' }}>
                            <label for="faktor3" class="form-check-label"> Faktor 3 </label>
                            @if ($errors->has('faktor3'))
                                <span class="text-danger">{{ $errors->first('faktor3') }}</span>
                            @endif
                        </div>
                        <div class="col-md-2">
                            <input type="checkbox" name="faktor4" id="faktor4" class="form-check-input"
                                value="1" {{ old('faktor4', $editbumil->jenisfaktor->faktor4) == 1 ? 'checked' : '' }}>
                            <label for="faktor4" class="form-check-label"> Faktor 4 </label>
                            @if ($errors->has('faktor4'))
                                <span class="text-danger">{{ $errors->first('faktor4') }}</span>
                            @endif
                        </div>
                        <div class="col-md-2">
                            <input type="checkbox" name="faktor5" id="faktor5" class="form-check-input"
                                value="1" {{ old('faktor5', $editbumil->jenisfaktor->faktor5) == 1 ? 'checked' : '' }}>
                            <label for="faktor5" class="form-check-label"> Faktor 5 </label>
                            @if ($errors->has('faktor5'))
                                <span class="text-danger">{{ $errors->first('faktor5') }}</span>
                            @endif
                        </div>
                        <div class="col-md-2">
                            <input type="checkbox" name="faktor6" id="faktor6" class="form-check-input"
                                value="1" {{ old('faktor6', $editbumil->jenisfaktor->faktor6) == 1 ? 'checked' : '' }}>
                            <label for="faktor6" class="form-check-label"> Faktor 6 </label>
                            @if ($errors->has('faktor6'))
                                <span class="text-danger">{{ $errors->first('faktor6') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="color-container">
                    <h5 class="sub-header">Jenis Penyakit </h5>
                    <div class="row justify-content" style="width: 90%; margin-top:20px">
                        <div class="col-md-2">
                            <input type="checkbox" name="jantung" id="jantung" class="form-check-input"
                                value="1" {{ old('jantung', $editbumil->jenispenyakit->jantung) == 1 ? 'checked' : '' }}>
                            <label for="jantung" class="form-check-label"> Jantung </label>
                            @if ($errors->has('jantung'))
                                <span class="text-danger">{{ $errors->first('jantung') }}</span>
                            @endif
                        </div>

                        <div class="col-md-2">
                            <input type="checkbox" name="diabetes" id="diabetes" class="form-check-input"
                                value="1" {{ old('diabetes', $editbumil->jenispenyakit->diabetes) == 1 ? 'checked' : '' }}>
                            <label for="diabetes" class="form-check-label"> Diabetes </label>
                            @if ($errors->has('diabetes'))
                                <span class="text-danger">{{ $errors->first('diabetes') }}</span>
                            @endif
                        </div>
                        <div class="col-md-2">
                            <input type="checkbox" name="paru_paru" id="paru_paru" class="form-check-input"
                                value="1" {{ old('paru_paru', $editbumil->paru_paru) == 1 ? 'checked' : '' }}>
                            <label for="paru_paru" class="form-check-label"> Paru-Paru </label>
                            @if ($errors->has('paru_paru'))
                                <span class="text-danger">{{ $errors->first('paru_paru') }}</span>
                            @endif
                        </div>
                        <div class="col-md-2">
                            <input type="checkbox" name="ginjal" id="ginjal" class="form-check-input"
                                value="1" {{ old('ginjal', $editbumil->ginjal) == 1 ? 'checked' : '' }}>
                            <label for="ginjal" class="form-check-label"> Ginjal </label>
                            @if ($errors->has('ginjal'))
                                <span class="text-danger">{{ $errors->first('ginjal') }}</span>
                            @endif
                        </div>
                        <div class="col-md-2">
                            <input type="checkbox" name="hati" id="hati" class="form-check-input"
                                value="1" {{ old('hati', $editbumil->jenispenyakit->hati) == 1 ? 'checked' : '' }}>
                            <label for="hati" class="form-check-label"> Hati </label>
                            @if ($errors->has('hati'))
                                <span class="text-danger">{{ $errors->first('hati') }}</span>
                            @endif
                        </div>
                        <div class="col-md-2">
                            <input type="checkbox" name="kurang_darah" id="kurang_darah" class="form-check-input"
                                value="1" {{ old('kurang_darah', $editbumil->jenispenyakit->kurang_darah) == 1 ? 'checked' : '' }}>
                            <label for="kurang_darah" class="form-check-label"> Kurang Darah </label>
                            @if ($errors->has('kurang_darah'))
                                <span class="text-danger">{{ $errors->first('kurang_darah') }}</span>
                            @endif
                        </div>
                    </div>


                    <div class="row justify-content" style="width: 90%; margin-top:20px">
                        <div class="col-md-2">
                            <input type="checkbox" name="malaria" id="malaria" class="form-check-input"
                                value="1" {{ old('malaria', $editbumil->jenispenyakit->malaria) == 1 ? 'checked' : '' }}>
                            <label for="malaria" class="form-check-label"> Malaria </label>
                            @if ($errors->has('malaria'))
                                <span class="text-danger">{{ $errors->first('malaria') }}</span>
                            @endif
                        </div>
                        <div class="col-md-2">
                            <input type="checkbox" name="asma" id="asma" class="form-check-input"
                                value="1" {{ old('asma', $editbumil->jenispenyakit->asma) == 1 ? 'checked' : '' }}>
                            <label for="asma" class="form-check-label"> Asma </label>
                            @if ($errors->has('asma'))
                                <span class="text-danger">{{ $errors->first('asma') }}</span>
                            @endif
                        </div>
                        <div class="col-md-2">
                            <input type="checkbox" name="epilepsi" id="epilepsi" class="form-check-input"
                                value="1" {{ old('epilepsi', $editbumil->jenispenyakit->epilepsi) == 1 ? 'checked' : '' }}>
                            <label for="epilepsi" class="form-check-label"> Epilepsi </label>
                            @if ($errors->has('epilepsi'))
                                <span class="text-danger">{{ $errors->first('epilepsi') }}</span>
                            @endif
                        </div>
                        <div class="col-md-2">
                            <input type="checkbox" name="jiwa" id="jiwa" class="form-check-input"
                                value="1" {{ old('jiwa', $editbumil->jenispenyakit->jiwa) == 1 ? 'checked' : '' }}>
                            <label for="jiwa" class="form-check-label"> Jiwa </label>
                            @if ($errors->has('jiwa'))
                                <span class="text-danger">{{ $errors->first('jiwa') }}</span>
                            @endif
                        </div>
                        <div class="col-md-2">
                            <input type="checkbox" name="tbc" id="tbc" class="form-check-input"
                                value="1" {{ old('tbc', $editbumil->jenispenyakit->tbc) == 1 ? 'checked' : '' }}>
                            <label for="tbc" class="form-check-label"> TBC </label>
                            @if ($errors->has('tbc'))
                                <span class="text-danger">{{ $errors->first('tbc') }}</span>
                            @endif
                        </div>
                        <div class="col-md-2">
                            <input type="checkbox" name="pms" id="pms" class="form-check-input"
                                value="1" {{ old('pms', $editbumil->jenispenyakit->pms) == 1 ? 'checked' : '' }}>
                            <label for="pms" class="form-check-label"> PMS </label>
                            @if ($errors->has('pms'))
                                <span class="text-danger">{{ $errors->first('pms') }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="formbold-btn-wrapper">
                    <button type="button" class="formbold-btn cancel">
                        <a href="{{ route('indexbumil') }}" style="color: #ffffff; text-decoration: none;">Batal</a>
                    </button>
                    
                    <button type="submit" class="button-modal formbold-btn save" data-bs-toggle="modal"
                        data-bs-target="#exampleModal-2">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
