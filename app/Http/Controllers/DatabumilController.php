<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Databumil;
use App\Models\Infoawalbumil;
use App\Models\Posyandu;
use Illuminate\View\View;
use Illuminate\Http\Request;

class DatabumilController extends Controller
{
    public function indexbumil()
    {
        $databumil = Databumil::with(['jenispenyakit', 'jenisfaktor', 'jenisristi', 'periksabumil', 'infoawalbumil.posyandu'])->get();
        // dd($databayii->posyandu);
        // return $databayii;
        return view('admin.keloladata.dataBumil', ['databumilList' => $databumil]);
    }

    public function createbumil()
    {
        // $databumilList = Databumil::with(['jenispenyakit', 'jenisfaktor', 'jenisristi', 'periksabumil', 'infoawalbumil.posyandu'])->get();
        // return $databumilList;
        $datainfobumil = Posyandu::all();
        // dd($datainfobumil);
        // return $datainfobumil;
        return view('admin.kelolaData.formDataBumil', ['databumilList' => $datainfobumil]);
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

            //posyandu 
            // 'posyandu' => 'required|string|max:255',
  
        ]);
        // dd($validated);

        // $dataposyandu = $request->posyandu;
        // $data = Posyandu::where('posyandu', $dataposyandu)->get();
        // dd($data);
        // Posyandu::created([
        //     'kode_posyandu' => $request->kode_posyandu,
        //     'kode_desa' => $request->kode_desa,
        //     'kode_dusun' => $request->kode_dusun,
        //     'posyandu' => $request->posyandu,
        //     'kode_bidan' => $request->kode_bidan,
        //     'jumlah_kader' => $request->jumlah_kader,
        //     'jenis' => $request->jenis
        // ]);

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





        return redirect()->route('indexbumil')->with('success', 'Data berhasil disimpan.');
    }
}
