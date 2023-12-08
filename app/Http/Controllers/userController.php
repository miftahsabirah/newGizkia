<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function home()
    {
        return view('user.home');
    }

    public function dataAnak()
    {
        return view('user.data.anak');
    }

    public function dataBumil()
    {
        return view('user.data.bumil');
    }

    public function dataBumilRisti()
    {
        return view('user.data.bumilRisti');
    }

    public function dataIbuMelahirkan()
    {
        return view('user.data.ibuMelahirkan');
    }

    public function petaAnak()
    {
        return view('user.peta.anak');
    }

    public function petaBumil()
    {
        return view('user.peta.bumil');
    }

    public function petaBelumTerdaftar()
    {
        return view('user.peta.belumTerdaftar');
    }
    public function visualisasi()
    {
        return view('user.grafik.visualisasiData');
    }
    public function grafikDataAnak()
    {
        return view('user.grafik.dataAnak');
    }
    public function grafikDataBumil()
    {
        return view('user.grafik.dataBumil');
    }
    public function grafikDataImunisasi()
    {
        return view('user.grafik.dataImunisasi');
    }
}
