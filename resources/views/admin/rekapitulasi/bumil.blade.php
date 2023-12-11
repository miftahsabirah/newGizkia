@extends('master.layoutsAdmin')

@section('link')
    <link rel="stylesheet" href="css/manajemenProfil.css">
@endsection

@section('title')
    Rekapitulasi Bumil
@endsection


<!-- MAIN -->

@section('isi')
    <div class="container">
        <div class="title-container">
            <h2>Rekapitulasi Ibu Hamil</h2>
        </div>
        <div class="table-container">
            <div class="table-container">

                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th style="text-align: center;">No</th>
                            <th style="text-align: center;">Kode</th>
                            <th style="text-align: center;">Puskesmas</th>
                            <th style="text-align: center;">Register</th>
                            <th style="text-align: center;">K1 Murni</th>
                            <th style="text-align: center;">Melahirkan</th>
                            <th style="text-align: center;">Abortus</th>
                            <th style="text-align: center;">Meninggal</th>
                            <th style="text-align: center;">Pindah</th>
                            <th style="text-align: center;">Periksa Hamil</th>
                            <th style="text-align: center;">Periksa K1</th>
                            <th style="text-align: center;">Periksa K2</th>
                            <th style="text-align: center;">Periksa K3</th>
                            <th style="text-align: center;">Periksa K4</th>
                            <th style="text-align: center;">Periksa Ulang</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posyandus as $posyandu)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $posyandu->kode_posyandu }}</td>
                                <td>{{ $posyandu->posyandu }}</td>
                                @if ($countPerVaccine[$posyandu->kode_posyandu])
                                    <td>{{ $countPerVaccine[$posyandu->kode_posyandu]['tgl_register'] ?? 0 }}</td>
                                @else
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                @endif
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
    @endsection
