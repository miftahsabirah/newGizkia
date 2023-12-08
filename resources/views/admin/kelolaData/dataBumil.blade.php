@extends('master.layoutsAdmin')

@section('link')
    <link rel="stylesheet" href="css/manajemenProfil.css">
@endsection

@section('title')
    Data Bumil
@endsection


<!-- MAIN -->

@section('isi')
    <div class="dropdown" style="display: flex; justify-content: space-between; align-items: center;">
        <div>
            <button class="btn btn-color dropdown-toggle button1" type="button" id="dropdownMenuButton"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #D9D9D9">
                -- Ibu Hamil --
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                <a class="dropdown-item" href="{{ route('indexinfoawalbumil') }}">Ibu Hamil</a>
                <a class="dropdown-item" href="{{ route('indexbumil') }}">Bumil Risti</a>
                <a class="dropdown-item" href="{{ route('indexbumilmelahirkan') }}">Ibu Melahirkan</a>
            </div>
        </div>


        <a href="{{ route('createbumil') }}" type="button" class="add-data2">
            <i class="fi fi-rr-plus-small add-icon"></i> Tambah Data Bumil
        </a>
    </div>


    <div class="main-container">
        <div class="title-container rounded-top border-bottom">
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
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('indexinfoawalbumil') }}" method="get">
                                @csrf
                                <div class="formbold-mb-3">
                                    <label for="Posyandu">Posyandu:</label>
                                    <select name="posyandu" id="Posyandu" class="form-control">
                                        <option value="">-- Pilih Posyandu --</option>
                                        @foreach ($allPosyanduValues as $kodePosyandu => $posyanduName)
                                            <option value="{{ $kodePosyandu }}" {{ $kodePosyandu == $filterPosyandu ? 'selected' : '' }}>
                                                {{ $posyanduName }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Terapkan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            {{-- button modal 3 --}}
            <button type="button" class="button-modal" data-bs-toggle="modal" data-bs-target="#exampleModal-3">
                Variabel
            </button>

            <!-- Modal 3 -->
            <div class="modal fade" id="exampleModal-3" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="two-column-container">
                                <div class="left-column">
                                    <div class="formbold-mb-3">
                                        <label class="formbold-form-label">Jenis</label>
                                        <select class="formbold-form-input" name="JenisBumil" id="JenisBumil">
                                            <option value="Pilih JenisBumil">--Semua Jenis Bumil--</option>
                                            <option value="JenisBumil1">UMUM</option>
                                            <option value="JenisBumil2">BPJS PBI</option>
                                            <option value="JenisBumil3">BPJS NON PBI</option>
                                            <option value="JenisBumil4">JAMKESDA</option>
                                            <option value="JenisBumil5">LAINNYA</option>
                                        </select>
                                    </div>

                                    <div class="formbold-mb-3">
                                        <label class="formbold-form-label">Gakin</label>
                                        <select class="formbold-form-input" name="GakinBumil" id="GakinBumil">
                                            <option value="Pilih Gakin">--Semua Bumil--</option>
                                            <option value="GakinBumil1">Non Gakin</option>
                                            <option value="GakinBumil2">Gakin</option>
                                        </select>
                                    </div>

                                    <div class="formbold-mb-3">
                                        <label class="formbold-form-label">Risti</label>
                                        <select class="formbold-form-input" name="BumilRisti" id="BumilRisti">
                                            <option value="Pilih BumilRisti">--Semua Bumil--</option>
                                            <option value="BumilRisti1">Non Risti</option>
                                            <option value="BumilRisti2">Risti</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="right-column">
                                    <div class="checkbox-mb-1">
                                        <input type="checkbox" name="BumilCheckbox" id="BumilCheckbox1">
                                        <label for="BumilCheckbox1">Periode Registrasi Diaktifkan</label>
                                    </div>

                                    <div class="checkbox-mb-2">
                                        <input type="checkbox" name="BumilCheckbox" id="BumilCheckbox2">
                                        <label for="BumilCheckbox2">HPL Lewat Tanggal</label>
                                    </div>

                                    <div class="checkbox-mb-3">
                                        <input type="checkbox" name="BumilCheckbox" id="BumilCheckbox3">
                                        <label for="BumilCheckbox3">Informasi Naama Tabel</label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary">Terapkan</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- Bagian tampilan data dari info awal bumil --}}
        <div class="table-container">

            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th style="text-align: center;">No</th>
                        <th style="text-align: center;">No. Index infobumil</th>
                        <th style="text-align: center;">Posyandu</th>
                        <th style="text-align: center;">Nama</th>
                        <th style="text-align: center;">Suami</th>
                        <th style="text-align: center;">No Telepon</th>
                        <th style="text-align: center;">Alamat</th>
                        <th style="text-align: center;">Tgl informasi</th>
                        <th style="text-align: center;">User_id_pelapor</th>
                        <th style="text-align: center;">Verivikasi</th>
                        <th style="text-align: center;">latitude </th>
                        <th style="text-align: center;">longitude</th>
                        {{-- <th style="text-align: center;">Umur Kehamilan Sekarang</th>
                        <th style="text-align: center;">Suami</th>
                        <th style="text-align: center;">No. Telp</th>
                        <th style="text-align: center;">No. Telp Suami</th>
                        <th style="text-align: center;">HTP</th>
                        <th style="text-align: center;">Desa</th>
                        <th style="text-align: center;">Puskesmas</th>
                        <th style="text-align: center;">Kecamatan</th> --}}
                        <th style="text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($infobumilList as $datainfobumil)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $datainfobumil->no_index_infobumil }}</td>
                            <td>
                                {{ $datainfobumil->posyandu->posyandu }}
                            </td>
                            <td>{{ $datainfobumil->nama }}</td>
                            <td>{{ $datainfobumil->suami }}</td>
                            <td>{{ $datainfobumil->no_telepon }}</td>
                            <td>{{ $datainfobumil->alamat }}</td>
                            <td>{{ $datainfobumil->tgl_informasi }}</td>
                            <td>{{ $datainfobumil->user_id_pelapor }}</td>
                            <td>{{ $datainfobumil->verifikasi }}</td>
                            <td>{{ $datainfobumil->lat }}</td>
                            <td>{{ $datainfobumil->lng }}</td>
                            <td>
                                <button class="icon-button">
                                    <a href="{{ route('editinfoawalbumil', $datainfobumil->no_index_infobumil) }}">
                                        <i class="fi fi-rr-edit" style="color: #624DE3;"></i>
                                        <!-- Ikon pertama menjadi merah -->
                                    </a>
                                </button>
                                <span style="margin-right: 10px;"></span>
                                <button class="icon-button">
                                    <a href="{{ route('deleteinfobumil', $datainfobumil->no_index_infobumil) }}">
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
                    targets: [12],
                    orderable: false
                }],
                paging: true, // Tambahkan opsi ini
            });
        });



        function applyFilter() {
            // Get the selected value from the "Posyandu" filter
            var selectedPosyandu = document.getElementById('PosyanduFilter').value;

            // You can perform additional logic based on the selectedPosyandu value if needed

            // For now, let's just log the selected value to the console
            console.log('Selected Posyandu:', selectedPosyandu);

            // Here, you can make an AJAX request to the server with the selected filter value
            // Update the DataTable or reload the page accordingly
            // Example: window.location.href = '/your-route?posyandu=' + selectedPosyandu;
        }
    </script>
@endsection


