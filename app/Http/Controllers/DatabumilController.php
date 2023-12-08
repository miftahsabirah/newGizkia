<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Databumil;
use App\Models\Infoawalbumil;
use App\Models\Jenisfaktor;
use App\Models\Jenispenyakit;
use App\Models\Jenisristi;
use App\Models\Periksabumil;
use App\Models\Periksabumil;
use App\Models\Posyandu;
use Illuminate\View\View;
use Illuminate\Http\Request;

class DatabumilController extends Controller
{
    // fungsi bagian menampilkan infoawal bumil
    public function indexinfoawalbumil()
    {
        $infobumil = Infoawalbumil::with(['posyandu'])->get();
        // return $infobumil;
        return view('admin.kelolaData.dataBumil', ['infobumilList' => $infobumil]);
    }
    // untuk mengambil data posyandu
    public function createbumil()
    {
        $datainfobumil = Posyandu::all();
        return view('admin.kelolaData.formDataBumil', ['databumilList' => $datainfobumil]);
    }

    // fungsi yang digunakan untuk memasukkan ke dalam table info bumil
    public function postinfoawalbumil(Request $request)
    {
        // dd($request->validate([
        //     //INFO bumil
        //     'no_index_infobumil' =>     'required|string',
        //     'kode_posyandu' => 'required|exists:posyandu,kode_posyandu',
        //     'tgl_informasi' => 'required|date',
        //     'nama' => 'required|string|max:255',
        //     'suami' => 'required|string|max:255',
        //     'alamat' => 'required|string|max:255',
        //     'user_id_pelapor' => 'required|string',
        //     'verifikasi' => 'required|string',
        //     'lat' => 'required|decimal:7,100',
        //     'lng' => 'required|decimal:7,100',
        //     'no_telepon' => 'required|string|max:20',
        // ]));

        $request->validate([
            //INFO bumil
            'no_index_infobumil' => 'required|string',
            'kode_posyandu' => 'required|exists:posyandu,kode_posyandu',
            'tgl_informasi' => 'required|date',
            'nama' => 'required|string|max:90',
            'suami' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'user_id_pelapor' => 'required|string',
            'verifikasi' => 'required|string',
            'lat' => 'required|decimal:7,100',
            'lng' => 'required|decimal:7,100',
            'no_telepon' => 'required|string|max:20',
        ]);

        Infoawalbumil::create([
            'no_index_infobumil' => $request->no_index_infobumil,
            'kode_posyandu' => $request->kode_posyandu,
            'tgl_informasi' => $request->tgl_informasi,
            'nama' => $request->nama,
            'suami' => $request->suami,
            'alamat' => $request->alamat,
            'user_id_pelapor' => $request->user_id_pelapor,
            'verifikasi' => $request->verifikasi,
            'lat' => $request->lat,
            'lng' => $request->lng,
            'no_telepon' => $request->no_telepon,
        ]);
        return redirect()->route('indexinfoawalbumil')->with('success', 'Data berhasil disimpan.');
    }


    public function deleteinfobumil($no_index_infobumil)
    {
        $datainfobumildelete = Infoawalbumil::findOrFail($no_index_infobumil);

        if (!$datainfobumildelete) {
            return redirect()->route('indexinfoawalbumil')
                ->withError('Record not found');
        }

        $datainfobumildelete->delete();
        return redirect()->route('indexinfoawalbumil')
            ->withSuccess('You have successfully deleted the petugas');
    }

    public function editinfoawalbumil($no_index_infobumil)
    {
        $infoeditawalbumil = Infoawalbumil::findOrFail($no_index_infobumil);
        return view('admin.kelolaData.formEditDataBumil', compact('infoeditawalbumil'));
    }

    // fungsi update data dari info awal bumil
    public function updateinfobumil(Request $request, $no_index_infobumil)
    {
        $request->validate([
            'no_index_infobumil' => 'required|string',
            'kode_posyandu' => 'required|exists:posyandu,kode_posyandu',
            'tgl_informasi' => 'required|date',
            'nama' => 'required|string|max:90',
            'suami' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'user_id_pelapor' => 'required|string',
            'verifikasi' => 'required|string',
            'lat' => 'required|decimal:7,100',
            'lng' => 'required|decimal:7,100',
            'no_telepon' => 'required|string|max:20',
        ]);

        $updateinfobumil = Infoawalbumil::findOrFail($no_index_infobumil);
        $updateinfobumil->update([
            'no_index_infobumil' => $request->no_index_infobumil,
            'kode_posyandu' => $request->kode_posyandu,
            'tgl_informasi' => $request->tgl_informasi,
            'nama' => $request->nama,
            'suami' => $request->suami,
            'alamat' => $request->alamat,
            'user_id_pelapor' => $request->user_id_pelapor,
            'verifikasi' => $request->verifikasi,
            'lat' => $request->lat,
            'lng' => $request->lng,
            'no_telepon' => $request->no_telepon,
        ]);

        return redirect()->route('indexinfoawalbumil')
            ->withSuccess('You have successfully updated Info awal bumil');
    }



    // fungsi dari data bumil
    public function indexbumil()
    {
        $databumil = Databumil::with(['jenispenyakit', 'jenisfaktor', 'jenisristi', 'periksabumil', 'infoawalbumil.posyandu'])->get();
        // dd($databayii->posyandu);
        // return $databumil;
        return view('admin.keloladata.dataBumilRisti', ['databumilList' => $databumil]);
    }

    public function createdatabumil()
    {
        $databumill = Infoawalbumil::all();
        return view('admin.kelolaData.formDataBumilRisti', ['databumilList' => $databumill]);
    }

    public function postbumil(Request $request)
    {

        $request->validate([
            //jenisristi
            'resiko1' => 'nullable|integer',
            'resiko2' => 'nullable|integer',
            'resiko3' => 'nullable|integer',
            'resiko4' => 'nullable|integer',
            'resiko5' => 'nullable|integer',
            'resiko6' => 'nullable|integer',
            'resiko7' => 'nullable|integer',
            'resiko8' => 'nullable|integer',
            'resiko9' => 'nullable|integer',
            'resiko10' => 'nullable|integer',
            'resiko11' => 'nullable|integer',

            //janis faktor
            'faktor1' => 'nullable|integer',
            'faktor2' => 'nullable|integer',
            'faktor3' => 'nullable|integer',
            'faktor4' => 'nullable|integer',
            'faktor5' => 'nullable|integer',
            'faktor6' => 'nullable|integer',

            //jenis penyakit 
            'jantung' => 'nullable|integer',
            'diabetes' => 'nullable|integer',
            'paru_paru' => 'nullable|integer',
            'ginjal' => 'nullable|integer',
            'hati' => 'nullable|integer',
            'kurang_darah' => 'nullable|integer',
            'malaria' => 'nullable|integer',
            'asma' => 'nullable|integer',
            'tbc' => 'nullable|integer',
            'epilepsi' => 'nullable|integer',
            'jiwa' => 'nullable|integer',
            'pms' => 'nullable|integer',

            // //periksa bumil
            'tanggal_periksa' => 'required|date',
            'jenis_periksa' => 'required|string',
            'tempat_periksa' => 'required|string',
            'luar_gedung' => 'required|boolean',
            'kode_petugas' => 'required|string',
            'umur_kehamilan' => 'required|integer',
            'keluhan' => 'required|string',
            'lila' => 'required|numeric',
            'sistole' => 'required|integer',
            'diastole' => 'required|integer',
            'hb' => 'required|numeric',
            'berad_badan' => 'required|numeric',
            'tinggi_fundus' => 'required|numeric',
            'jumlah_janin' => 'required|integer',
            'letak_janin' => 'required|string',
            'posisi_janin' => 'required|string',
            'denyut_janin' => 'required|numeric',
            'lab' => 'required|string',
            'yodium' => 'required|boolean',
            'tindakan_fe' => 'required|boolean',
            'fe1' => 'required|boolean',
            'fe2' => 'required|boolean',
            'fe3' => 'required|boolean',
            'tindakan_tt' => 'required|boolean',
            'tt1' => 'required|boolean',
            'tt2' => 'required|boolean',
            'tt3' => 'required|boolean',
            'dirujuk' => 'required|boolean',
            'posisitbj' => 'required|string',
            'tbj' => 'required|numeric',
            'kodefe' => 'required|string',
            'jumlahfe' => 'required|integer',
            'obatcacing' => 'required|boolean',
            'tt4' => 'required|boolean',
            'tt5' => 'required|boolean',
            'hbsag' => 'required|boolean',
            'rapid_test' => 'required|boolean',
            'protein_urine' => 'required|string',
            'gds' => 'required|integer',
            'ims' => 'required|boolean',
            'nama' => 'required|string',

            // //databumil
            'no_index_bumil' => 'required|string|max:18|unique:databumil',
            // 'id_jenispenyakit' => 'required|exists:jenispenyakit,id',
            // 'id_jenisfaktor' => 'required|exists:jenisfaktor,id',
            // 'id_jenisristi' => 'required|exists:jenisristi,id',
            // 'id_periksabumil' => 'required|exists:periksabumil,id',
            'id_no_index_infobumil' => 'required|string|exists:infoawalbumil,no_index_infobumil',
            'tgl_register' => 'required|date',
            'tgl_lahir' => 'required|date',
            'bbawal' => 'required|numeric',
            'umur' => 'required|integer',
            'umur_kehamilan' => 'required|integer',
            'jenis_persalinan' => 'required|string',
            'no_telepon_istri' => 'required|string',
            'htp' => 'required|date',
            'jenisristi' => 'required|string',
            'g' => 'required|integer',
            'p' => 'required|integer',
            'a' => 'required|integer',
            'lila' => 'required|numeric',
            'sistole_akhir' => 'required|integer',
            'diastole_akhir' => 'required|numeric',
            'hb_akhir' => 'required|numeric',
            'rt' => 'required|string',
            'rw' => 'required|string',
            'tanggal_melahirkan' => 'required|date',
            'penolong' => 'required|string',
            'cara_lahir' => 'required|string',
            'kondisi_bayi' => 'required|string',
            'kondisi_ibu' => 'required|string',
            'konseling_pasca_salin' => 'required|integer',
            'jenis_gakin' => 'required|string',


        ]);
        // dd($validated);
        // dd($request->all());
        // dd($info);

        Jenisristi::create([
            'resiko1' => $request->resiko1,
            'resiko2' => $request->resiko2,
            'resiko3' => $request->resiko3,
            'resiko4' => $request->resiko4,
            'resiko5' => $request->resiko5,
            'resiko6' => $request->resiko6,
            'resiko7' => $request->resiko7,
            'resiko8' => $request->resiko8,
            'resiko9' => $request->resiko9,
            'resiko10' => $request->resiko10,
            'resiko11' => $request->resiko11,
        ]);

        Jenisfaktor::create([
            'faktor1' => $request->faktor1,
            'faktor2' => $request->faktor2,
            'faktor3' => $request->faktor3,
            'faktor4' => $request->faktor4,
            'faktor5' => $request->faktor5,
            'faktor6' => $request->faktor6,
        ]);

        Jenispenyakit::create([
            'jantung' => $request->jantung,
            'diabetes' => $request->diabetes,
            'paru_paru' => $request->paru_paru,
            'ginjal' => $request->ginjal,
            'hati' => $request->hati,
            'kurang_darah' => $request->kurang_darah,
            'malaria' => $request->malaria,
            'asma' => $request->asma,
            'tbc' => $request->tbc,
            'epilepsi' => $request->epilepsi,
            'jiwa' => $request->jiwa,
            'pms' => $request->pms,
        ]);

        Periksabumil::create([
            'tanggal_periksa' => $request->tanggal_periksa,
            'jenis_periksa' => $request->jenis_periksa,
            'tempat_periksa' => $request->tempat_periksa,
            'luar_gedung' => $request->luar_gedung,
            'kode_petugas' => $request->kode_petugas,
            'umur_kehamilan' => $request->umur_kehamilan,
            'keluhan' => $request->keluhan,
            'lila' => $request->lila,
            'sistole' => $request->sistole,
            'diastole' => $request->diastole,
            'hb' => $request->hb,
            'berad_badan' => $request->berad_badan,
            'tinggi_fundus' => $request->tinggi_fundus,
            'jumlah_janin' => $request->jumlah_janin,
            'letak_janin' => $request->letak_janin,
            'posisi_janin' => $request->posisi_janin,
            'denyut_janin' => $request->denyut_janin,
            'lab' => $request->lab,
            'yodium' => $request->yodium,
            'tindakan_fe' => $request->tindakan_fe,
            'fe1' => $request->fe1,
            'fe2' => $request->fe2,
            'fe3' => $request->fe3,
            'tindakan_tt' => $request->tindakan_tt,
            'tt1' => $request->tt1,
            'tt2' => $request->tt2,
            'tt3' => $request->tt3,
            'dirujuk' => $request->dirujuk,
            'posisitbj' => $request->posisitbj,
            'tbj' => $request->tbj,
            'kodefe' => $request->kodefe,
            'jumlahfe' => $request->jumlahfe,
            'obatcacing' => $request->obatcacing,
            'tt4' => $request->tt4,
            'tt5' => $request->tt5,
            'hbsag' => $request->hbsag,
            'rapid_test' => $request->rapid_test,
            'protein_urine' => $request->protein_urine,
            'gds' => $request->gds,
            'ims' => $request->ims,
            'nama' => $request->nama,
        ]);
        $jenisPenyakit = Jenispenyakit::orderBy('id', 'DESC')->first();
        $jenisFaktor = Jenisfaktor::orderBy('id', 'DESC')->first();
        $jenisRisti = Jenisristi::orderBy('id', 'DESC')->first();
        $PeriksaBumil = Periksabumil::orderBy('id', 'DESC')->first();
        Databumil::create([
            'no_index_bumil' => $request->no_index_bumil,
            'id_jenispenyakit' => $jenisPenyakit->id,
            'id_jenisfaktor' => $jenisFaktor->id,
            'id_jenisristi' => $jenisRisti->id,
            'id_periksabumil' => $PeriksaBumil->id,
            'id_no_index_infobumil' => $request->id_no_index_infobumil,
            'tgl_register' => $request->tgl_register,
            'tgl_lahir' => $request->tgl_lahir,
            'bbawal' => $request->bbawal,
            'umur' => $request->umur,
            'umur_kehamilan' => $request->umur_kehamilan,
            'jenis_persalinan' => $request->jenis_persalinan,
            'no_telepon_istri' => $request->no_telepon_istri,
            'htp' => $request->htp,
            'jenisristi' => $request->jenisristi,
            'g' => $request->g,
            'p' => $request->p,
            'a' => $request->a,
            'lila' => $request->lila,
            'sistole_akhir' => $request->sistole_akhir,
            'diastole_akhir' => $request->diastole_akhir,
            'hb_akhir' => $request->hb_akhir,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'tanggal_melahirkan' => $request->tanggal_melahirkan,
            'penolong' => $request->penolong,
            'cara_lahir' => $request->cara_lahir,
            'kondisi_bayi' => $request->kondisi_bayi,
            'kondisi_ibu' => $request->kondisi_ibu,
            'konseling_pasca_salin' => $request->konseling_pasca_salin,
            'jenis_gakin' => $request->jenis_gakin,
        ]);


        return redirect()->route('indexbumil')->with('success', 'Data berhasil disimpan.');
    }

    public function indexbumilmelahirkan()
    {
        $databumil = Databumil::with(['jenispenyakit', 'jenisfaktor', 'jenisristi', 'periksabumil', 'infoawalbumil.posyandu'])->get();
        // dd($databayii->posyandu);
        // return $databumil;
        return view('admin.keloladata.dataibuMelahirkan', ['databumilList' => $databumil]);
    }

    public function deletedatabumil($no_index_bumil)
    {
        $databumildelete = Databumil::findOrFail($no_index_bumil);

        if (!$databumildelete) {
            return redirect()->route('indexbumil')
                ->withError('Record not found');
        }

        $databumildelete->delete();
        return redirect()->route('indexbumil')
            ->withSuccess('You have successfully deleted the petugas');
    }
    public function editbumil($no_index_bumil)
    {
        $editbumil = Databumil::with('jenispenyakit', 'jenisfaktor', 'jenisristi', 'periksabumil', 'infoawalbumil')
        ->findOrFail($no_index_bumil);
        // dd($editbumil);
        return view('admin.kelolaData.formEditDataBumilristi', compact('editbumil'));
    }
    
    public function updatebumil(Request $request, $no_index_bumil)
    {
        $request->validate([
            //jenisristi
            'resiko1' => 'nullable|integer',
            'resiko2' => 'nullable|integer',
            'resiko3' => 'nullable|integer',
            'resiko4' => 'nullable|integer',
            'resiko5' => 'nullable|integer',
            'resiko6' => 'nullable|integer',
            'resiko7' => 'nullable|integer',
            'resiko8' => 'nullable|integer',
            'resiko9' => 'nullable|integer',
            'resiko10' => 'nullable|integer',
            'resiko11' => 'nullable|integer',

            //janis faktor
            'faktor1' => 'nullable|integer',
            'faktor2' => 'nullable|integer',
            'faktor3' => 'nullable|integer',
            'faktor4' => 'nullable|integer',
            'faktor5' => 'nullable|integer',
            'faktor6' => 'nullable|integer',

            //jenis penyakit 
            'jantung' => 'nullable|integer',
            'diabetes' => 'nullable|integer',
            'paru_paru' => 'nullable|integer',
            'ginjal' => 'nullable|integer',
            'hati' => 'nullable|integer',
            'kurang_darah' => 'nullable|integer',
            'malaria' => 'nullable|integer',
            'asma' => 'nullable|integer',
            'tbc' => 'nullable|integer',
            'epilepsi' => 'nullable|integer',
            'jiwa' => 'nullable|integer',
            'pms' => 'nullable|integer',

            // //periksa bumil
            'tanggal_periksa' => 'required|date',
            'jenis_periksa' => 'required|string',
            'tempat_periksa' => 'required|string',
            'luar_gedung' => 'required|boolean',
            'kode_petugas' => 'required|string',
            'umur_kehamilan' => 'required|integer',
            'keluhan' => 'required|string',
            'lila' => 'required|numeric',
            'sistole' => 'required|integer',
            'diastole' => 'required|integer',
            'hb' => 'required|numeric',
            'berad_badan' => 'required|numeric',
            'tinggi_fundus' => 'required|numeric',
            'jumlah_janin' => 'required|integer',
            'letak_janin' => 'required|string',
            'posisi_janin' => 'required|string',
            'denyut_janin' => 'required|numeric',
            'lab' => 'required|string',
            'yodium' => 'required|boolean',
            'tindakan_fe' => 'required|boolean',
            'fe1' => 'required|boolean',
            'fe2' => 'required|boolean',
            'fe3' => 'required|boolean',
            'tindakan_tt' => 'required|boolean',
            'tt1' => 'required|boolean',
            'tt2' => 'required|boolean',
            'tt3' => 'required|boolean',
            'dirujuk' => 'required|boolean',
            'posisitbj' => 'required|string',
            'tbj' => 'required|numeric',
            'kodefe' => 'required|string',
            'jumlahfe' => 'required|integer',
            'obatcacing' => 'required|boolean',
            'tt4' => 'required|boolean',
            'tt5' => 'required|boolean',
            'hbsag' => 'required|boolean',
            'rapid_test' => 'required|boolean',
            'protein_urine' => 'required|string',
            'gds' => 'required|integer',
            'ims' => 'required|boolean',
            'nama' => 'required|string',

            // //databumil
            'no_index_bumil' => 'required|string|max:18',
            // 'id_jenispenyakit' => 'required|exists:jenispenyakit,id',
            // 'id_jenisfaktor' => 'required|exists:jenisfaktor,id',
            // 'id_jenisristi' => 'required|exists:jenisristi,id',
            // 'id_periksabumil' => 'required|exists:periksabumil,id',
            'id_no_index_infobumil' => 'required|string|exists:infoawalbumil,no_index_infobumil',
            'tgl_register' => 'required|date',
            'tgl_lahir' => 'required|date',
            'bbawal' => 'required|numeric',
            'umur' => 'required|integer',
            'umur_kehamilan' => 'required|integer',
            'jenis_persalinan' => 'required|string',
            'no_telepon_istri' => 'required|string',
            'htp' => 'required|date',
            'jenisristi' => 'required|string',
            'g' => 'required|integer',
            'p' => 'required|integer',
            'a' => 'required|integer',
            'lila' => 'required|numeric',
            'sistole_akhir' => 'required|integer',
            'diastole_akhir' => 'required|numeric',
            'hb_akhir' => 'required|numeric',
            'rt' => 'required|string',
            'rw' => 'required|string',
            'tanggal_melahirkan' => 'required|date',
            'penolong' => 'required|string',
            'cara_lahir' => 'required|string',
            'kondisi_bayi' => 'required|string',
            'kondisi_ibu' => 'required|string',
            'konseling_pasca_salin' => 'required|integer',
            'jenis_gakin' => 'required|string',


        ]);
        $jenisPenyakit = Jenispenyakit::orderBy('id', 'DESC')->first();
        $jenisFaktor = Jenisfaktor::orderBy('id', 'DESC')->first();
        $jenisRisti = Jenisristi::orderBy('id', 'DESC')->first();
        $PeriksaBumil = Periksabumil::orderBy('id', 'DESC')->first();

        $updatebumill = Databumil::findOrFail($no_index_bumil);
        // $updatebumilristi = Jenisristi::findOrFail($id);
        // $updateJenisfaktor = Jenisfaktor::findOrFail($id);
        // $updateJenisfaktor = Jenispenyakit::findOrFail($id);
        $updatePeriksabumil = Periksabumil::findOrFail($no_index_bumil);
        $updatebumill->update([
            //jenisristi
            'resiko1' => $request->resiko1,
            'resiko2' => $request->resiko2,
            'resiko3' => $request->resiko3,
            'resiko4' => $request->resiko4,
            'resiko5' => $request->resiko5,
            'resiko6' => $request->resiko6,
            'resiko7' => $request->resiko7,
            'resiko8' => $request->resiko8,
            'resiko9' => $request->resiko9,
            'resiko10' => $request->resiko10,
            'resiko11' => $request->resiko11,
 
   
            //janis faktor
            'faktor1' => $request->faktor1,
            'faktor2' => $request->faktor2,
            'faktor3' => $request->faktor3,
            'faktor4' => $request->faktor4,
            'faktor5' => $request->faktor5,
            'faktor6' => $request->faktor6,
   
            //jenis penyakit 
            'jantung' => $request->jantung,
            'diabetes' => $request->diabetes,
            'paru_paru' => $request->paru_paru,
            'ginjal' => $request->ginjal,
            'hati' => $request->hati,
            'kurang_darah' => $request->kurang_darah,
            'malaria' => $request->malaria,
            'asma' => $request->asma,
            'tbc' => $request->tbc,
            'epilepsi' => $request->epilepsi,
            'jiwa' => $request->jiwa,
            'pms' => $request->pms,
        ]);
        $updatePeriksabumil->update([
            // //periksa bumil
            'tanggal_periksa' => $request->tanggal_periksa,
            'jenis_periksa' => $request->jenis_periksa,
            'tempat_periksa' => $request->tempat_periksa,
            'luar_gedung' => $request->luar_gedung,
            'kode_petugas' => $request->kode_petugas,
            'umur_kehamilan' => $request->umur_kehamilan,
            'keluhan' => $request->keluhan,
            'lila' => $request->lila,
            'sistole' => $request->sistole,
            'diastole' => $request->diastole,
            'hb' => $request->hb,
            'berad_badan' => $request->berad_badan,
            'tinggi_fundus' => $request->tinggi_fundus,
            'jumlah_janin' => $request->jumlah_janin,
            'letak_janin' => $request->letak_janin,
            'posisi_janin' => $request->posisi_janin,
            'denyut_janin' => $request->denyut_janin,
            'lab' => $request->lab,
            'yodium' => $request->yodium,
            'tindakan_fe' => $request->tindakan_fe,
            'fe1' => $request->fe1,
            'fe2' => $request->fe2,
            'fe3' => $request->fe3,
            'tindakan_tt' => $request->tindakan_tt,
            'tt1' => $request->tt1,
            'tt2' => $request->tt2,
            'tt3' => $request->tt3,
            'dirujuk' => $request->dirujuk,
            'posisitbj' => $request->posisitbj,
            'tbj' => $request->tbj,
            'kodefe' => $request->kodefe,
            'jumlahfe' => $request->jumlahfe,
            'obatcacing' => $request->obatcacing,
            'tt4' => $request->tt4,
            'tt5' => $request->tt5,
            'hbsag' => $request->hbsag,
            'rapid_test' => $request->rapid_test,
            'protein_urine' => $request->protein_urine,
            'gds' => $request->gds,
            'ims' => $request->ims,
            'nama' => $request->nama,
        ]);
        $updatebumill->update([
            // //databumil
            'no_index_bumil' => $request->no_index_bumil,
            'id_jenispenyakit' => $jenisPenyakit->id,
            'id_jenisfaktor' => $jenisFaktor->id,
            'id_jenisristi' => $jenisRisti->id,
            'id_periksabumil' => $PeriksaBumil->id,
            'id_no_index_infobumil' => $request->id_no_index_infobumil,
            'tgl_register' => $request->tgl_register,
            'tgl_lahir' => $request->tgl_lahir,
            'bbawal' => $request->bbawal,
            'umur' => $request->umur,
            'umur_kehamilan' => $request->umur_kehamilan,
            'jenis_persalinan' => $request->jenis_persalinan,
            'no_telepon_istri' => $request->no_telepon_istri,
            'htp' => $request->htp,
            'jenisristi' => $request->jenisristi,
            'g' => $request->g,
            'p' => $request->p,
            'a' => $request->a,
            'lila' => $request->lila,
            'sistole_akhir' => $request->sistole_akhir,
            'diastole_akhir' => $request->diastole_akhir,
            'hb_akhir' => $request->hb_akhir,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'tanggal_melahirkan' => $request->tanggal_melahirkan,
            'penolong' => $request->penolong,
            'cara_lahir' => $request->cara_lahir,
            'kondisi_bayi' => $request->kondisi_bayi,
            'kondisi_ibu' => $request->kondisi_ibu,
            'konseling_pasca_salin' => $request->konseling_pasca_salin,
            'jenis_gakin' => $request->jenis_gakin,
        ]);

        return redirect()->route('indexbumil')
            ->withSuccess('You have successfully updated bumil');
    }
}
