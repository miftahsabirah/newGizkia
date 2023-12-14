@extends('master.layoutsAdmin')

@section('link')
    <link rel="stylesheet" href="css/manajemenProfil.css">
@endsection

@section('title')
    Data Bumil Risti
@endsection


<!-- MAIN -->

@section('isi')
    <div class="dropdown" style="display: flex; justify-content: space-between; align-items: center;">
        <div>
            <button class="btn btn-color dropdown-toggle button1" type="button" id="dropdownMenuButton"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #D9D9D9">
                -- Bumil Risti --
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{ route('indexinfoawalbumil') }}">Ibu Hamil</a>
                <a class="dropdown-item" href="{{ route('indexbumil') }}">Bumil Risti</a>
                <a class="dropdown-item" href="{{ route('indexbumilmelahirkan') }}">Ibu Melahirkan</a>
            </div>
        </div>
        <a href="{{ route('createdatabumil') }}" type="button" class="add-data2">
            <i class="fi fi-rr-plus-small add-icon"></i> Tambah Data Bumil Risti
        </a>
    </div>


    <div class="main-container">
        <div class="title-container rounded-top border-bottom d-flex justify-content-between align-items-center">
            <div>
                {{-- button modal 1 --}}
                <button type="button" class="button-modal" data-bs-toggle="modal" data-bs-target="#exampleModal-1">
                    Wilayah
                </button>

                <!-- Modal 1 -->
                <div class="modal fade" id="exampleModal-1" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="formbold-mb-3">
                                    <label class="formbold-form-label">Desa</label>

                                    <select class="formbold-form-input" name="Desa" id="Desa">
                                        <option value="Pilih Desa">--Pilih Desa--</option>
                                        <option value="Desa1">Desa 1</option>
                                        <option value="Desa2">Desa 2</option>
                                        <option value="Desa3">Desa 3</option>
                                    </select>
                                </div>
                                <div class="formbold-mb-3">
                                    <label class="formbold-form-label">Kecamatan</label>

                                    <select class="formbold-form-input" name="Kecamatan" id="Kecamatan">
                                        <option value="Pilih Kecamatan">--Pilih Kecamatan--</option>
                                        <option value="Kecamatan1">Kecamatan 1</option>
                                        <option value="Kecamatan2">Kecamatan 2</option>
                                        <option value="Kecamatan3">Kecamatan 3</option>
                                    </select>
                                </div>
                                <div class="formbold-mb-3">
                                    <label class="formbold-form-label">Posyandu</label>

                                    <select class="formbold-form-input" name="Posyandu" id="Posyandu">
                                        <option value="Pilih Posyandu">--Pilih Posyandu--</option>
                                        <option value="Posyandu1">Posyandu 1</option>
                                        <option value="Posyandu2">Posyandu 2</option>
                                        <option value="Posyandu3">Posyandu 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="button" class="btn btn-primary">Terapkan</button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- button modal 2 --}}
                <button type="button" class="button-modal" data-bs-toggle="modal" data-bs-target="#exampleModal-2">
                    Puskesmas
                </button>

                <!-- Modal 2 -->
                <div class="modal fade" id="exampleModal-2" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('indexbumil') }}" method="get">
                                    @csrf
                                    <div class="formbold-mb-3">
                                        <label for="Posyandu">Posyandu:</label>
                                        <select name="posyandu" id="Posyandu" class="form-control">
                                            <option value="">-- Pilih Posyandu --</option>
                                            @foreach ($allPosyanduValues as $kodePosyandu => $posyanduName)
                                                <option value="{{ $kodePosyandu }}"
                                                    {{ $kodePosyandu == $filterPosyandu ? 'selected' : '' }}>
                                                    {{ $posyanduName }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Terapkan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="d-flex">
                <div class="form-check-dbr mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Periode HPL
                    </label>
                </div>

                <div class="dropdown me-2">
                    <button class="button-dd dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        --Bulan--
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <a class="dropdown-item" href="#">Januari</a>
                        <a class="dropdown-item" href="#">Februari</a>
                        <a class="dropdown-item" href="#">Maret</a>
                        <a class="dropdown-item" href="#">April</a>
                        <a class="dropdown-item" href="#">Mei</a>
                        <a class="dropdown-item" href="#">Juni</a>
                        <a class="dropdown-item" href="#">Juli</a>
                        <a class="dropdown-item" href="#">Agustus</a>
                        <a class="dropdown-item" href="#">September</a>
                        <a class="dropdown-item" href="#">Oktober</a>
                        <a class="dropdown-item" href="#">November</a>
                        <a class="dropdown-item" href="#">Desember</a>
                    </div>
                </div>

                <div class="dropdown me-2">
                    <button class="button-dd dropdown-toggle" type="button" id="dropdownMenuButton2"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        --Tahun--
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                        <a class="dropdown-item" href="#">2020</a>
                        <a class="dropdown-item" href="#">2021</a>
                        <a class="dropdown-item" href="#">2022</a>
                        <a class="dropdown-item" href="#">2023</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="table-container">

            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th style="text-align: center;">No</th>
                        <th style="text-align: center;">No Index Bumil</th>
                        <th style="text-align: center;">Nama</th>
                        <th style="text-align: center;">Umur</th>
                        <th style="text-align: center;">Suami</th>
                        <th style="text-align: center;">umur kehamilan</th>
                        <th style="text-align: center;">Gakin</th>
                        <th style="text-align: center;">Posyandu</th>
                        <th style="text-align: center;">RT</th>
                        <th style="text-align: center;">RW</th>
                        <th style="text-align: center;">Dusun</th>
                        <th style="text-align: center;">Desa</th>
                        <th style="text-align: center;">HTP</th>
                        <th style="text-align: center;">F1</th>
                        <th style="text-align: center;">F2</th>
                        <th style="text-align: center;">F3</th>
                        <th style="text-align: center;">F4</th>
                        <th style="text-align: center;">F5</th>
                        <th style="text-align: center;">F6</th>
                        <th style="text-align: center;">jantung</th>
                        <th style="text-align: center;">diabetes</th>
                        <th style="text-align: center;">paru_paru</th>
                        <th style="text-align: center;">ginjal</th>
                        <th style="text-align: center;">hati</th>
                        <th style="text-align: center;">kurang_darah</th>
                        <th style="text-align: center;">malaria</th>
                        <th style="text-align: center;">asma</th>
                        <th style="text-align: center;">tbc</th>
                        <th style="text-align: center;">epilepsi</th>
                        <th style="text-align: center;">jiwa</th>
                        <th style="text-align: center;">pms</th>
                        <th style="text-align: center;">Jenis Risti</th>
                        <th style="text-align: center;">penolong</th>
                        <th style="text-align: center;">G</th>
                        <th style="text-align: center;">P</th>
                        <th style="text-align: center;">A</th>
                        <th style="text-align: center;">Lila</th>
                        <th style="text-align: center;">S. Akhir</th>
                        <th style="text-align: center;">D. Akhir</th>
                        <th style="text-align: center;">HB. Akhir</th>
                        <th style="text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($databumilList as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->no_index_bumil }}</td>
                            <td>{{ $item->infoawalbumil->nama }}</td>
                            <td>{{ $item->infoawalbumil->suami }}</td>
                            <td>{{ $item->umur }}</td>
                            <td>{{ $item->periksabumil->umur_kehamilan }}</td>
                            <td>{{ $item->jenis_gakin }}</td>
                            <td>{{ $item->infoawalbumil->posyandu->posyandu }}</td>
                            <td>{{ $item->rt }}</td>
                            <td>{{ $item->rw }}</td>
                            <td>{{ $item->infoawalbumil->posyandu->dusun->nama }}</td>
                            <td>{{ $item->infoawalbumil->posyandu->desa->nama }}</td>
                            <td>{{ $item->htp }}</td>
                            <td>
                                <input type="checkbox" class="form-check-input" name="faktor1"
                                    value="{{ $item->jenisfaktor->faktor1 }}"
                                    {{ $item->jenisfaktor->faktor1 ? 'checked' : '' }}>
                            </td>
                            <td><input type="checkbox" class="form-check-input" name="faktor1"
                                    value="{{ $item->jenisfaktor->faktor2 }}"
                                    {{ $item->jenisfaktor->faktor2 ? 'checked' : '' }}></td>
                            <td><input type="checkbox" class="form-check-input" name="faktor1"
                                    value="{{ $item->jenisfaktor->faktor3 }}"
                                    {{ $item->jenisfaktor->faktor3 ? 'checked' : '' }}></td>
                            <td><input type="checkbox" class="form-check-input" name="faktor1"
                                    value="{{ $item->jenisfaktor->faktor4 }}"
                                    {{ $item->jenisfaktor->faktor4 ? 'checked' : '' }}></td>
                            <td><input type="checkbox" class="form-check-input" name="faktor1"
                                    value="{{ $item->jenisfaktor->faktor5 }}"
                                    {{ $item->jenisfaktor->faktor5 ? 'checked' : '' }}></td>
                            <td><input type="checkbox" class="form-check-input" name="faktor1"
                                    value="{{ $item->jenisfaktor->faktor6 }}"
                                    {{ $item->jenisfaktor->faktor6 ? 'checked' : '' }}></td>
                            <td><input type="checkbox" class="form-check-input" name="resiko1"
                                    value="{{ $item->jenispenyakit->jantung }}"
                                    {{ $item->jenispenyakit->jantung ? 'checked' : '' }}></td>
                            <td><input type="checkbox" class="form-check-input" name="resiko1"
                                    value="{{ $item->jenispenyakit->diabetes }}"
                                    {{ $item->jenispenyakit->diabetes ? 'checked' : '' }}></td>
                            <td><input type="checkbox" class="form-check-input" name="resiko1"
                                    value="{{ $item->jenispenyakit->paru_paru }}"
                                    {{ $item->jenispenyakit->paru_paru ? 'checked' : '' }}></td>
                            <td><input type="checkbox" class="form-check-input" name="resiko1"
                                    value="{{ $item->jenispenyakit->ginjal }}"
                                    {{ $item->jenispenyakit->ginjal ? 'checked' : '' }}></td>
                            <td><input type="checkbox" class="form-check-input" name="resiko1"
                                    value="{{ $item->jenispenyakit->hati }}"
                                    {{ $item->jenispenyakit->hati ? 'checked' : '' }}></td>
                            <td><input type="checkbox" class="form-check-input" name="resiko1"
                                    value="{{ $item->jenispenyakit->kurang_darah }}"
                                    {{ $item->jenispenyakit->kurang_darah ? 'checked' : '' }}></td>
                            <td><input type="checkbox" class="form-check-input" name="resiko1"
                                    value="{{ $item->jenispenyakit->malaria }}"
                                    {{ $item->jenispenyakit->malaria ? 'checked' : '' }}></td>
                            <td><input type="checkbox" class="form-check-input" name="resiko1"
                                    value="{{ $item->jenispenyakit->asma }}"
                                    {{ $item->jenispenyakit->asma ? 'checked' : '' }}></td>
                            <td><input type="checkbox" class="form-check-input" name="resiko1"
                                    value="{{ $item->jenispenyakit->tbc }}"
                                    {{ $item->jenispenyakit->tbc ? 'checked' : '' }}></td>
                            <td><input type="checkbox" class="form-check-input" name="resiko1"
                                    value="{{ $item->jenispenyakit->epilepsi }}"
                                    {{ $item->jenispenyakit->epilepsi ? 'checked' : '' }}></td>
                            <td><input type="checkbox" class="form-check-input" name="resiko1"
                                    value="{{ $item->jenispenyakit->jiwa }}"
                                    {{ $item->jenispenyakit->jiwa ? 'checked' : '' }}></td>
                            <td><input type="checkbox" class="form-check-input" name="resiko1"
                                    value="{{ $item->jenispenyakit->pms }}"
                                    {{ $item->jenispenyakit->pms ? 'checked' : '' }}></td>
                            <td>{{ $item->jenisristi }}</td>
                            <td>{{ $item->penolong }}</td>
                            <td>{{ $item->g }}</td>
                            <td>{{ $item->p }}</td>
                            <td>{{ $item->a }}</td>
                            <td>{{ $item->lila }}</td>
                            <td>{{ $item->sistole_akhir }}</td>
                            <td>{{ $item->diastole_akhir }}</td>
                            <td>{{ $item->hb_akhir }}</td>
                            <td>
                                <button class="icon-button">
                                    <a href="{{ route('editbumil', $item->no_index_bumil) }}">
                                        <i class="fi fi-rr-edit" style="color: #624DE3;"></i>
                                        <!-- Ikon pertama menjadi merah -->
                                    </a>
                                </button>
                                <span style="margin-right: 10px;"></span>
                                <button class="icon-button">
                                    <a href="{{ route('deletedatabumil', $item->no_index_bumil) }}">
                                        <i class="fi fi-rr-trash" style="color: #A30D11;"></i>
                                        <!-- Ikon kedua menjadi hijau -->
                                    </a>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('addScript')
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                columnDefs: [{
                        targets: [14],
                        orderable: false
                    } // Kolom 10, 11, dan 16 tidak dapat di-sorting
                ]
            });
        });
    </script>

    <script>
        function terapkanPeriode() {
            // Mendapatkan nilai tanggal dari elemen input
            var periodeValue = document.getElementById('Periode').value;

            // Implementasikan logika terapkan tanggal di sini
            alert('Tanggal telah diterapkan: ' + periodeValue);
            // Tambahkan logika lain sesuai kebutuhan, misalnya kirim data ke server, dll.
        }
    </script>
@endsection
