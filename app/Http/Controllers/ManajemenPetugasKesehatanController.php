<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Psy\Util\Str;

class ManajemenPetugasKesehatanController extends Controller
{
    public function Formtambah()
    {
        return view('admin.kelolaProfil.formTambah');
    }

    public function indexpetugas()
    {
        $datapetugas = User::where('role_id', 'petugas')
            ->where('status', 'diterima')
            ->get();
        // dd($datapetugas);
        return view('admin.kelolaProfil.manajemenPetugasKesehatan', compact('datapetugas'));
    }
    public function indexpetugasblmterdaftar()
    {
        $datapetugas = User::where('role_id', 'petugas')
            ->where(function ($query) {
                $query->where('status', 'proses')
                    ->orWhere('status', 'ditolak');
            })
            ->get();
        return view('admin.kelolaProfil.manajemenAkses', compact('datapetugas'));
    }
    public function terimaPetugas($id)
    {
        $petugas = User::findOrFail($id);
        $petugas->update(['status' => 'diterima']);

        return redirect()->route('indexpetugasblmterdaftar')
            ->withSuccess('You have successfully deleted the petugas');
    }
    public function tolakPetugas($id)
    {
        $petugas = User::findOrFail($id);
        $petugas->update(['status' => 'ditolak']);

        return redirect()->route('indexpetugasblmterdaftar')
            ->withSuccess('You have successfully deleted the petugas');
    }

    public function storepetugas(Request $request)
    {

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
            'status' =>  'diterima',
            'email' => $request->email,
        ]);

        $request->session()->regenerate();
        return redirect()->route('indexpetugas')
            ->withSuccess('You have successfully add petugas');
    }

    public function hapus($id)
    {
        $petugas = User::findOrFail($id);
        $petugas->delete();
        return redirect()->route('indexpetugas')
            ->withSuccess('You have successfully deleted the petugas');
    }

    public function editpetugas($id)
    {

        $petugas = User::findOrFail($id);

        return view('admin.kelolaProfil.formEdit', compact('petugas'));
    }
    
    public function updatepetugas(Request $request, $id)
    {
        $request->validate([
            'username' => 'required',
            'nama' => 'required',
            'telepon' => 'required',
            'jenis_petugas' => 'required',
            'nip' => 'required',
            'pwd' => 'required',
            'kode_pkm' => 'required',
            'email' => 'required',
        ]);

        $petugas = User::findOrFail($id);
        $petugas->update([
            'username' => $request->username,
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'jenis_petugas' => $request->jenis_petugas,
            'nip' => $request->nip,
            'pwd' => $request->pwd,
            'kode_pkm' => $request->kode_pkm,
            'email' => $request->email,
        ]);

        return redirect()->route('indexpetugas')
            ->withSuccess('You have successfully updated petugas');
    }
}
