@extends('master.header')

@section('link')
<link rel="stylesheet" href="css/user.css">
@endsection

@section('title')
Rekapitulasi Data Anak
@endsection

@section('isi')

        <div class="card p-4 container-dd shadow">
            <div class="dropdown" style="display: flex; justify-content: flex-end; align-items: center; margin-left: auto;">
                <a href="#" type="button" class="btn-filter-dd" data-bs-toggle="modal" data-bs-target="#exampleModal-1">
                    <i class="fi fi-rr-filter"></i> Filter Data
                </a>

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
                                    <label class="formbold-form-label">Puskesmas</label>

                                    <select class="formbold-form-input" name="Puskesmas" id="puskesmas">
                                        <option value="Pilih Desa">--Pilih Desa--</option>
                                        <option value="Puskesmas1">Puskesmas 1</option>
                                        <option value="Puskesmas2">Puskesmas 2</option>
                                        <option value="Puskesmas3">Puskesmas 3</option>
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
            
                <a href="#" type="button" class="btn-exp-dd">
                    <i class="fi fi-rr-file-export"></i> Export Data 
                </a>
            </div>            
            
            <nav>
                <div class="nav nav-tabs rounded-top" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-kelurahan" type="button" role="tab" aria-controls="nav-kelurahan" aria-selected="true">Kelurahan</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-petugas" type="button" role="tab" aria-controls="nav-petugas" aria-selected="false">Petugas Medis</button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-posyandu" type="button" role="tab" aria-controls="nav-posyandu" aria-selected="false">Posyandu</button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-dusun" type="button" role="tab" aria-controls="nav-dusun" aria-selected="false">Dusun</button>
                </div>
            </nav>

            <div class="tab-content p-3 border" id="nav-tabContent">
                <div class="tab-pane fade active show" id="nav-kelurahan" role="tabpanel" aria-labelledby="nav-kelurahan-tab">
                    <div class="table-container-dd">
                        <table id="example1" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">Kode Kab</th>
                                    <th style="text-align: center;">Desa</th>
                                    <th style="text-align: center;">Kode Petugas</th>
                                    <th style="text-align: center;">Bidan</th>
                                    <th style="text-align: center;">Telepon</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-petugas" role="tabpanel" aria-labelledby="nav-petugas-tab">
                    <div class="table-container-dd">
                        <table id="example2" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">NIP</th>
                                    <th style="text-align: center;">Kode</th>
                                    <th style="text-align: center;">Nama</th>
                                    <th style="text-align: center;">Telepon</th>
                                    <th style="text-align: center;">Jenis</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-posyandu" role="tabpanel" aria-labelledby="nav-posyandu-tab">
                    <div class="table-container-dd">
                        <table id="example3" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">Kode Posyandu</th>
                                    <th style="text-align: center;">Posyandu</th>
                                    <th style="text-align: center;">Desa</th>
                                    <th style="text-align: center;">Dusun</th>
                                    <th style="text-align: center;">Nama</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-dusun" role="tabpanel" aria-labelledby="nav-dusun-tab">
                    <div class="table-container-dd">
                        <table id="example4" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">Kode Posyandu</th>
                                    <th style="text-align: center;">Posyandu</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


@endsection

@section('addScript')
  <script>
      new DataTable('#example1');
      new DataTable('#example2');
      new DataTable('#example3');
      new DataTable('#example4');
  </script>

@endsection
