@extends('master.header')

@section('link')
<link rel="stylesheet" href="css/user.css">
@endsection

@section('title')
Restore Data
@endsection

@section('isi')

<div class="modal-dialog modal-dialog-centered mt-5">
    <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Restore Data</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="formbold-mb-3">
                <label class="formbold-form-label">Upload ulang data yang akan di backup</label>

                <select class="formbold-form-input" name="Puskesmas" id="puskesmas">
                    <option value="Pilih Desa">--Pilih Data--</option>
                    <option value="Puskesmas1">Data Anak</option>
                    <option value="Puskesmas2">Data Bumil</option>
                    <option value="Puskesmas3">Data Imunisasi</option>
                </select>
            </div>

            <div class="formbold-mb-3">
                <label for="tanggal_lahir" class="formbold-form-label"> Pilih tanggal awal data ditampilkan </label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="formbold-form-input"/>
            </div>

            <div class="formbold-mb-3">
                <label for="tanggal_lahir" class="formbold-form-label"> Pilih tanggal akhir akhir data ditampilkan </label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="formbold-form-input"/>
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-primary">Terapkan</button>
        </div>
    </div>
</div>

@endsection