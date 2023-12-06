<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Databumil;
use App\Models\Infoawalbumil;
use App\Models\Jenisfaktor;
use App\Models\Jenispenyakit;
use App\Models\Jenisristi;
use App\Models\Posyandu;
use Illuminate\View\View;
use Illuminate\Http\Request;

class DatabumilController extends Controller
{
    // fungsi bagian menampilkan infoawal bumil
    public function indexinfoawalbumil()
    {
        $infobumil = Infoawalbumil::with(['posyandu'])->paginate(10);
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

    public function indexbumil()
    {
        $databumil = Databumil::with(['jenispenyakit', 'jenisfaktor', 'jenisristi', 'periksabumil', 'infoawalbumil.posyandu'])->get();
        // dd($databayii->posyandu);
        // return $databayii;
        return view('admin.keloladata.dataBumilRisti', ['databumilList' => $databumil]);
    }



    public function postbumil(Request $request)
    {
        // dd($request->validate([
        //     //INFO bumil
        //     'no_index_infobumil' => 'required|string',
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

        $validated = $request->validate([
            //INFO bumil
            // 'no_index_infobumil' => 'required|string',
            // 'kode_posyandu' => 'required|exists:posyandu,kode_posyandu',
            // 'tgl_informasi' => 'required|date',
            // 'nama' => 'required|string|max:90',
            // 'suami' => 'required|string|max:255',
            // 'alamat' => 'required|string|max:255',
            // 'user_id_pelapor' => 'required|string',
            // 'verifikasi' => 'required|string',
            // 'lat' => 'required|decimal:7,100',
            // 'lng' => 'required|decimal:7,100',
            // 'no_telepon' => 'required|string|max:20',

            //databumil

            'no_index_bumil' => 'required|string|max:18|unique:databumil',
            'id_jenispenyakit' => 'required|exists:jenispenyakit,id',
            'id_jenisfaktor' => 'required|exists:jenisfaktor,id',
            'id_jenisristi' => 'required|exists:jenisristi,id',
            'id_periksabumil' => 'required|exists:periksabumil,id',
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

            //jenisristi
            'resiko1' => 'nullable|integer|in:0,1',
            'resiko2' => 'nullable|integer|in:0,1',
            'resiko3' => 'nullable|integer|in:0,1',
            'resiko4' => 'nullable|integer|in:0,1',
            'resiko5' => 'nullable|integer|in:0,1',
            'resiko6' => 'nullable|integer|in:0,1',
            'resiko7' => 'nullable|integer|in:0,1',
            'resiko8' => 'nullable|integer|in:0,1',
            'resiko9' => 'nullable|integer|in:0,1',
            'resiko10' => 'nullable|integer|in:0,1',
            'resiko11' => 'nullable|integer|in:0,1',

            //janis faktor
            'faktor1' => 'nullable|integer|in:0,1',
            'faktor2' => 'nullable|integer|in:0,1',
            'faktor3' => 'nullable|integer|in:0,1',
            'faktor4' => 'nullable|integer|in:0,1',
            'faktor5' => 'nullable|integer|in:0,1',
            'faktor6' => 'nullable|integer|in:0,1',

            //jenis penyakit 
            'jantung' => 'nullable|integer|in:0,1',
            'diabetes' => 'nullable|integer|in:0,1',
            'paru_paru' => 'nullable|integer|in:0,1',
            'ginjal' => 'nullable|integer|in:0,1',
            'hati' => 'nullable|integer|in:0,1',
            'kurang_darah' => 'nullable|integer|in:0,1',
            'malaria' => 'nullable|integer|in:0,1',
            'asma' => 'nullable|integer|in:0,1',
            'tbc' => 'nullable|integer|in:0,1',
            'epilepsi' => 'nullable|integer|in:0,1',
            'jiwa' => 'nullable|integer|in:0,1',
            'pms' => 'nullable|integer|in:0,1',

        ]);
        // dd($validated);


        $info = Infoawalbumil::create([
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
        // dd($info);

        Databumil::create([
            'no_index_bumil' => $validated['no_index_bumil'],
            'id_jenispenyakit' => $validated['id_jenispenyakit'],
            'id_jenisfaktor' => $validated['id_jenisfaktor'],
            'id_jenisristi' => $validated['id_jenisristi'],
            'id_periksabumil' => $validated['id_periksabumil'],
            'id_no_index_infobumil' => $info->no_index_infobumil, // Assuming there's a relationship between Infoawalbumil and Databumil
            'tgl_register' => $validated['tgl_register'],
            'tgl_lahir' => $validated['tgl_lahir'],
            'bbawal' => $validated['bbawal'],
            'umur' => $validated['umur'],
            'umur_kehamilan' => $validated['umur_kehamilan'],
            'jenis_persalinan' => $validated['jenis_persalinan'],
            'no_telepon_istri' => $validated['no_telepon_istri'],
            'htp' => $validated['htp'],
            'jenisristi' => $validated['jenisristi'],
            'g' => $validated['g'],
            'p' => $validated['p'],
            'a' => $validated['a'],
            'lila' => $validated['lila'],
            'sistole_akhir' => $validated['sistole_akhir'],
            'diastole_akhir' => $validated['diastole_akhir'],
            'hb_akhir' => $validated['hb_akhir'],
            'rt' => $validated['rt'],
            'rw' => $validated['rw'],
            'tanggal_melahirkan' => $validated['tanggal_melahirkan'],
            'penolong' => $validated['penolong'],
            'cara_lahir' => $validated['cara_lahir'],
            'kondisi_bayi' => $validated['kondisi_bayi'],
            'kondisi_ibu' => $validated['kondisi_ibu'],
            'konseling_pasca_salin' => $validated['konseling_pasca_salin'],
            'jenis_gakin' => $validated['jenis_gakin'],
        ]);

        Jenisristi::create([
            'resiko1' => $validated['resiko1'],
            'resiko2' => $validated['resiko2'],
            'resiko3' => $validated['resiko3'],
            'resiko4' => $validated['resiko4'],
            'resiko5' => $validated['resiko5'],
            'resiko6' => $validated['resiko6'],
            'resiko7' => $validated['resiko7'],
            'resiko8' => $validated['resiko8'],
            'resiko9' => $validated['resiko9'],
            'resiko10' => $validated['resiko10'],
            'resiko11' => $validated['resiko11'],
        ]);

        Jenisfaktor::create([
            'faktor1' => $validated['faktor1'],
            'faktor2' => $validated['faktor2'],
            'faktor3' => $validated['faktor3'],
            'faktor4' => $validated['faktor4'],
            'faktor5' => $validated['faktor5'],
            'faktor6' => $validated['faktor6'],
        ]);

        Jenispenyakit::create([
            'jantung' => $validated['jantung'],
            'diabetes' => $validated['diabetes'],
            'paru_paru' => $validated['paru_paru'],
            'ginjal' => $validated['ginjal'],
            'hati' => $validated['hati'],
            'kurang_darah' => $validated['kurang_darah'],
            'malaria' => $validated['malaria'],
            'asma' => $validated['asma'],
            'tbc' => $validated['tbc'],
            'epilepsi' => $validated['epilepsi'],
            'jiwa' => $validated['jiwa'],
            'pms' => $validated['pms'],
        ]);

        return redirect()->route('indexbumil')->with('success', 'Data berhasil disimpan.');
    }
}
