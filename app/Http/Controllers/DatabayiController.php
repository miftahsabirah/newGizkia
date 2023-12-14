<?php

namespace App\Http\Controllers;

use App\Models\Databayi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Penyakit;
use App\Models\Periksabumil;
use App\Models\Posyandu;
use App\Models\Rekapbalita;
use App\Models\Rekapimunisasi;

class DatabayiController extends Controller
{
    public function indexbayi()
    {
        $databayii = Databayi::with(['posyandu', 'rekapbalita', 'rekapimunisasi', 'penyakit'])->get();
        // dd($databayii->posyandu);
        // return $databayii;
        return view('admin.keloladata.dataBalita', ['databayiList' => $databayii]);
    }
    public function createbayi()
    {
        $databalita = Posyandu::all();

        return view('admin.kelolaData.formDataBalita', ['databumilList' => $databalita]);
    }
    public function storedatabayi(Request $request)
    {
        $request->validate([

            // Validation rules for Rekapimunisasi model
            'bcg' => 'nullable|date',
            'dpt_1' => 'nullable|date',
            'dpt_2' => 'nullable|date',
            'dpt_3' => 'nullable|date',
            'polio_1' => 'nullable|date',
            'polio_2' => 'nullable|date',
            'polio_3' => 'nullable|date',
            'ipv' => 'nullable|date',
            'campak' => 'nullable|date',
            'boosterpentavalen' => 'nullable|date',
            'boostercampak' => 'nullable|date',
            'hepatitis_0' => 'nullable|date',
            'hepatitis_1' => 'nullable|date',
            'hepatitis_2' => 'nullable|date',
            'hepatitis_3' => 'nullable|date',
            'noe_natal_1' => 'nullable|date',
            'noe_natal_2' => 'nullable|date',
            'noe_natal_3' => 'nullable|date',

            // Validation rules for Penyakit model
            'asfiksia' => 'nullable|integer',
            'hipotermi' => 'nullable|integer',
            'infeksi' => 'nullable|integer',
            'tetanus' => 'nullable|integer',
            'bblr' => 'nullable|integer',
            'komplikasi_lain' => 'nullable|integer',

            //rekapbalita
            'umur_bayi_meniggal' => 'nullable|string',
            'tempat_bayi_meniggal' => 'nullable|string',
            'penyebab_bayi_meniggal' => 'nullable|string',
            'meniggal' => 'nullable|string',
            'tanggal_meniggal' => 'nullable|date',
            'gizi_buruk' => 'nullable|string',
            'berat_bayi' => 'nullable|numeric',
            'linkar_kepala' => 'nullable|numeric',
            'pindah' => 'nullable|string',
            'tanggal_pindah' => 'nullable|date',
            'status_tumbuh_kembang' => 'nullable|string',

            // // Validation rules for Databayi model
            'no_index_balita' => 'required|string',
            'kode_posyandu' => 'required|string',
            // // // 'rekapimunisasi_id' => 'nullable|exists:rekapimunisasis,id',
            // // // 'rekapbalita_id' => 'nullable|exists:rekapbalitas,id',
            // // // 'penyakit_id' => 'nullable|exists:penyakits,id',
            // // // 'penyakit' => 'nullable|string',
            'no_index' => 'required|string',
            'akte' => 'nullable|string',
            'nokk' => 'nullable|string',
            'nama_bayi' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'nama_ibu' => 'required|string',
            'nama_ayah' => 'required|string',
            'gakin' => 'nullable|string',
            'rt' => 'nullable|string',
            'rw' => 'nullable|string',

            'tb_terakhir' => 'nullable|numeric',
            'bb_terakhir' => 'nullable|numeric',
            'tanggal_timbang_terakhir' => 'nullable|date',
            'stunting' => 'nullable|string',
            'cekidl' => 'nullable|string',
            'cekbadutq' => 'nullable|string',
            'status_bbu' => 'nullable|string',
            'status_tbu' => 'nullable|string',
            'status_bbtb' => 'nullable|string',
            'tanggal_register' => 'nullable|date',
            'kode_tempat' => 'nullable|string',
            'alamat' => 'nullable|string',
            'kode_wilayah' => 'nullable|string',
            'dirujuk' => 'nullable|string',
            'no_telepon_ortu' => 'nullable|string',
            'kode_suku' => 'nullable|string',
            'nik' => 'nullable|string',
            'no_kartu' => 'nullable|string',
            'nik_ibu' => 'nullable|string',
            'anak_ke' => 'nullable|integer',
            'hb024' => 'nullable|string',
            'bayi_id' => 'nullable|string',
            'bayi_kategori' => 'nullable|string',
            'aktif' => 'nullable|string',
        ]);
        Rekapbalita::create([
            'umur_bayi_meniggal' => $request->umur_bayi_meniggal,
            'tempat_bayi_meniggal' => $request->tempat_bayi_meniggal,
            'penyebab_bayi_meniggal' => $request->penyebab_bayi_meniggal,
            'meniggal' => $request->meniggal,
            'tanggal_meniggal' => $request->tanggal_meniggal,
            'gizi_buruk' => $request->gizi_buruk,
            'berat_bayi' => $request->berat_bayi,
            'linkar_kepala' => $request->linkar_kepala,
            'pindah' => $request->pindah,
            'tanggal_pindah' => $request->tanggal_pindah,
            'status_tumbuh_kembang' => $request->status_tumbuh_kembang
        ]);
        Penyakit::create([
            'asfiksia' => $request->asfiksia,
            'hipotermi' => $request->hipotermi,
            'infeksi' => $request->infeksi,
            'tetanus' => $request->tetanus,
            'bblr' => $request->bblr,
            'komplikasi_lain' => $request->komplikasi_lain,
        ]);
        Rekapimunisasi::create([
            'polio_1' => $request->polio_1,
            'polio_2' => $request->polio_2,
            'polio_3' => $request->polio_3,
            'ipv' => $request->ipv,
            'campak' => $request->campak,
            'boosterpentavalen' => $request->boosterpentavalen,
            'boostercampak' => $request->boostercampak,
            'hepatitis_0' => $request->hepatitis_0,
            'hepatitis_1' => $request->hepatitis_1,
            'hepatitis_2' => $request->hepatitis_2,
            'hepatitis_3' => $request->hepatitis_3,
            'noe_natal_1' => $request->noe_natal_1,
            'noe_natal_2' => $request->noe_natal_2,
            'noe_natal_3' => $request->noe_natal_3,
        ]);


        //  dd($request->all());
        // dd($dataposyandu);
        $rekapbalita = Rekapbalita::orderBy('id', 'DESC')->first();
        $rekapimunisasi = Rekapimunisasi::orderBy('id', 'DESC')->first();
        // dd($rekapimunisasi);
        $Penyakit = Penyakit::orderBy('id', 'DESC')->first();
        Databayi::create([
            'no_index_balita' => $request->no_index_balita,
            'kode_posyandu' => $request->kode_posyandu,
            'id_rekapimunisasi' => $rekapimunisasi->id,
            'id_rekapbalita' => $rekapbalita->id,
            'penyakit' => $Penyakit->id,
            'no_index' => $request->no_index,
            'akte' => $request->akte,
            'nokk' => $request->nokk,
            'nama_bayi' => $request->nama_bayi,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nama_ibu' => $request->nama_ibu,
            'nama_ayah' => $request->nama_ayah,
            'gakin' => $request->gakin,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'tb_terakhir' => $request->tb_terakhir,
            'bb_terakhir' => $request->bb_terakhir,
            'tanggal_timbang_terakhir' => $request->tanggal_timbang_terakhir,
            'stunting' => $request->stunting,
            'cekidl' => $request->cekidl,
            'cekbadutq' => $request->cekbadutq,
            'status_bbu' => $request->status_bbu,
            'status_tbu' => $request->status_tbu,
            'status_bbtb' => $request->status_bbtb,
            'tanggal_register' => $request->tanggal_register,
            'kode_tempat' => $request->kode_tempat,
            'alamat' => $request->alamat,
            'kode_wilayah' => $request->kode_wilayah,
            'dirujuk' => $request->dirujuk,
            'no_telepon_ortu' => $request->no_telepon_ortu,
            'kode_suku' => $request->kode_suku,
            'nik' => $request->nik,
            'no_kartu' => $request->no_kartu,
            'nik_ibu' => $request->nik_ibu,
            'anak_ke' => $request->anak_ke,
            'hb024' => $request->hb024,
            'bayi_id' => $request->bayi_id,
            'bayi_kategori' => $request->bayi_kategori,
            'aktif' => $request->aktif,
        ]);


        return redirect()->route('indexbayi')->with('success', 'Data berhasil disimpan.');
    }

    public function indexbayirekap()
    {
        $databayii = Databayi::with(['posyandu', 'rekapbalita', 'rekapimunisasi', 'penyakit'])->get();
        // dd($databayii->posyandu);
        // return $databayii;
        return view('admin.keloladata.dataImunisasi', ['databayiList' => $databayii]);
    }
}