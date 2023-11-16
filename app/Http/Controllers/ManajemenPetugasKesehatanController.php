<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ManajemenPetugasKesehatanController extends Controller
{
    public function Formtambah(){
        return view('admin.kelolaProfil.formTambah');
    }

    public function storepetugas(Request $request){

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

        $request->session()->regenerate();
        return redirect()->route('manpetugas')
            ->withSuccess('You have successfully add petugas');
    }
    public function manpetugas()
    {
        return view('admin.kelolaProfil.manajemenPetugasKesehatan');
    }
}
