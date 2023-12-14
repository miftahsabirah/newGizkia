@extends('master.layoutsAdmin')

@section('link')
    <link rel="stylesheet" href="css/manajemenProfil.css">
@endsection

@section('title')
    Rekapitulasi Anak
@endsection


<!-- MAIN -->

@section('isi')
    <div class="container">
        <div class="title-container">
            <h2>Rekapitulasi Anak</h2>
        </div>
        <div class="table-container">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        {{-- <th style="text-align: center;">No</th>
                        <th style="text-align: center;">Kode</th>
                        <th style="text-align: center;">Puskesmas</th>
                        <th style="text-align: center;">Register</th>
                        <th style="text-align: center;">Kelahiran</th>
                        <th style="text-align: center;">Meninggal</th> --}}
                        <th rowspan="2" class="th2">No</th>
                        <th rowspan="2" class="th2">Kode</th>
                        <th rowspan="2" class="th2">Puskesmas</th>
                        <th colspan="3" class="th2">Register</th>
                        <th colspan="3" class="th2">Kelahiran</th>
                        <th colspan="3" class="th2">Meninggal</th>
                        {{-- <th rowspan="2" class="th2">KN1</th>
                        <th rowspan="2" class="th2">KN2</th>
                        <th rowspan="2" class="th2">KN3</th> --}}
                    </tr>
                    <tr>
                        {{-- untuk register --}}
                        <th class="th2">L</th>
                        <th class="th2">P</th>
                        <th class="th2">Total</th>
                        {{-- untuk kelahirah --}}
                        <th class="th2">L</th>
                        <th class="th2">P</th>
                        <th class="th2">Total</th>
                        {{-- untuk meninggal --}}
                        <th class="th2">L</th>
                        <th class="th2">P</th>
                        <th class="th2">Total</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($posyandus as $posyandu)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $posyandu->kode_posyandu }}</td>
                            <td>{{ $posyandu->posyandu }}</td>
                            @if (isset($countPerbayi3[$posyandu->kode_posyandu]))
                                <td>{{ $countPerbayi3[$posyandu->kode_posyandu]['laki-laki'] ?? 0 }}</td>
                                <td>{{ $countPerbayi3[$posyandu->kode_posyandu]['perempuan'] ?? 0 }}</td>
                            @else
                                <!-- Your else content goes here -->
                            @endif

                            @if ($countPerbayi2[$posyandu->kode_posyandu])
                                <td>{{ $countPerbayi2[$posyandu->kode_posyandu]['tanggal_register'] ?? 0 }}</td>
                            @else
                                <td>0</td>
                            @endif
                            @if (isset($countPerbayi3[$posyandu->kode_posyandu]))
                                <td>{{ $countPerbayi3[$posyandu->kode_posyandu]['laki-laki'] ?? 0 }}</td>
                                <td>{{ $countPerbayi3[$posyandu->kode_posyandu]['perempuan'] ?? 0 }}</td>
                            @else
                                <!-- Your else content goes here -->
                            @endif
                            @if ($countPerbayi2[$posyandu->kode_posyandu])
                                <td>{{ $countPerbayi2[$posyandu->kode_posyandu]['tanggal_lahir'] ?? 0 }}</td>
                            @else
                                <td>0</td>
                            @endif

                            @if (isset($countPerbayi4[$posyandu->kode_posyandu]))
                                <td>{{ $countPerbayi4[$posyandu->kode_posyandu]['laki-laki'] ?? 0 }}</td>
                                <td>{{ $countPerbayi4[$posyandu->kode_posyandu]['perempuan'] ?? 0 }}</td>
                            @else
                                <!-- Your else content goes here -->
                            @endif
                            @if ($countPerbayi[$posyandu->kode_posyandu])
                                <td>{{ $countPerbayi[$posyandu->kode_posyandu]['tanggal_meniggal'] ?? 0 }}</td>
                            @else
                                <td>0</td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                columnDefs: [{
                    targets: [9],
                    orderable: false
                }]
            });
        });
    </script>
@endsection
