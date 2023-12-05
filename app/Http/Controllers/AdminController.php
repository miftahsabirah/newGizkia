<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }


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
    public function formDataBalita()
    {
        return view('admin.kelolaData.formDataBalita');
    }
    public function formDataImunisasi()
    {
        return view('admin.kelolaData.formDataImunisasi');
    }


    public function petaAnak()
    {
        return view('admin.lihatLokasi.petaAnak');
    }
    public function petaBumil()
    {
        return view('admin.lihatLokasi.petaBumil');
    }
    public function petaBelumTerdaftar()
    {
        return view('admin.lihatLokasi.petaBelumTerdaftar');
    }
    public function rekapAnak()
    {
        return view('admin.rekapitulasi.anak');
    }
    public function rekapBumil()
    {
        return view('admin.rekapitulasi.bumil');
    }
    public function rekapGizi()
    {
        return view('admin.rekapitulasi.gizi');
    }
    public function rekapImunisasi()
    {
        return view('admin.rekapitulasi.imunisasi');
    }
    public function pengaturan()
    {
        return view('admin.pengaturan');
    }
    public function tambahAnak()
    {
        return view('admin.rekapitulasi.tambahAnak');
    }
    public function tambahBumil()
    {
        return view('admin.rekapitulasi.tambahBumil');
    }
    public function tambahImunisasi()
    {
        return view('admin.rekapitulasi.tambahImunisasi');
    }
    public function tambahGizi()
    {
        return view('admin.rekapitulasi.tambahGizi');
    }

    public function editAkses()
    {
        return view('admin.kelolaProfil.formEdit');
    }


    public function storeadmin(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'nama' => 'required',
            'telepon' => 'required',
            'jenis_petugas' => 'required',
            'nip' => 'required',
            'pwd' => 'required',
            'kode_pkm' => 'required',
            'email' => 'required',
        ]);
        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'jenis_petugas' => $request->jenis_petugas,
            'nip' => $request->nip,
            'pwd' => $request->pwd,
            'kode_pkm' => $request->kode_pkm,
            'role_id' => 'petugas',
            'email' => $request->email,
        ]);

        return redirect()->route('login')
        ->withSuccess('You have successfully registered & logged in!');
    }




}
