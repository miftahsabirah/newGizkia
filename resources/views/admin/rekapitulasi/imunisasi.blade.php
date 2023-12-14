@extends('master.layoutsAdmin')

@section('link')
    <link rel="stylesheet" href="css/manajemenProfil.css">
@endsection

@section('title')
    Rekapitulasi Imunisasi
@endsection


<!-- MAIN -->

@section('isi')
    <div class="container">
        <div class="title-container">
            <h2>Rekapitulasi Imunisasi</h2>
        </div>
        <div class="table-container">
            <div class="table-container">

                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th style="text-align: center;">No</th>
                            <th style="text-align: center;">Kode</th>
                            <th style="text-align: center;">Puskesmas</th>
                            <th style="text-align: center;">BCG</th>
                            <th style="text-align: center;">DPT 1</th>
                            <th style="text-align: center;">DPT 2</th>
                            <th style="text-align: center;">DPT 3</th>
                            <th style="text-align: center;">Polio 1</th>
                            <th style="text-align: center;">Polio 2</th>
                            <th style="text-align: center;">Polio 3</th>
                            <th style="text-align: center;">IPV</th>
                            <th style="text-align: center;">Campak</th>
                            <th style="text-align: center;">Booster Pentavalen</th>
                            <th style="text-align: center;">Booster Campak</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posyandus as $posyandu)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $posyandu->kode_posyandu }}</td>
                                <td>{{ $posyandu->posyandu }}</td>
                                @if ($countPerVaccine[$posyandu->kode_posyandu])
                                <td>{{ $countPerVaccine[$posyandu->kode_posyandu]['bcg'] ?? 0 }}</td>           
                                <td>{{ $countPerVaccine[$posyandu->kode_posyandu]['dpt_1'] ?? 0 }}</td>
                                <td>{{ $countPerVaccine[$posyandu->kode_posyandu]['dpt_2'] ?? 0 }}</td>
                                <td>{{ $countPerVaccine[$posyandu->kode_posyandu]['dpt_3'] ?? 0 }}</td>
                                <td>{{ $countPerVaccine[$posyandu->kode_posyandu]['polio_1'] ?? 0 }}</td>
                                <td>{{ $countPerVaccine[$posyandu->kode_posyandu]['polio_2'] ?? 0 }}</td>
                                <td>{{ $countPerVaccine[$posyandu->kode_posyandu]['polio_3'] ?? 0 }}</td>
                                <td>{{ $countPerVaccine[$posyandu->kode_posyandu]['ipv'] ?? 0 }}</td>
                                <td>{{ $countPerVaccine[$posyandu->kode_posyandu]['campak'] ?? 0 }}</td>
                                <td>{{ $countPerVaccine[$posyandu->kode_posyandu]['boosterpentavalen'] ?? 0 }}</td>
                                <td>{{ $countPerVaccine[$posyandu->kode_posyandu]['boostercampak'] ?? 0 }}</td>                                                               
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
                    // columnDefs: [{
                    //         targets: [13],
                    //         orderable: false
                    //     } // Kolom 10, 11, dan 16 tidak dapat di-sorting
                    // ]
                });
            });
        </script>
    @endsection
