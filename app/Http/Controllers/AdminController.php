<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function manajemenAkses()
    {
        return view('admin.kelolaProfil.manajemenAkses');
    }

    public function manajemenPetugas()
    {
        return view('admin.kelolaProfil.manajemenPetugasKesehatan');
    }

    public function dataBumil()
    {
        return view('admin.kelolaData.dataBumil');
    }

    public function dataBumilRisti()
    {
        return view('admin.kelolaData.dataBumilRisti');
    }

    public function dataIbuMelahirkan()
    {
        return view('admin.kelolaData.dataIbuMelahirkan');
    }

    public function dataBalita()
    {
        return view('admin.kelolaData.dataBalita');
    }
    
    public function dataImunisasi()
    {
        return view('admin.kelolaData.dataImunisasi');
    }

    public function formDataBumil()
    {
        return view('admin.kelolaData.formDataBumil');
    }

    public function formDataBumilRisti()
    {
        return view('admin.kelolaData.formDataBumilRisti');
    }

    public function formDataIbuMelahirkan()
    {
        return view('admin.kelolaData.formDataIbuMelahirkan');
    }

}
