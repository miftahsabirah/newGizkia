<?php

namespace App\Http\Controllers;

use App\Models\Databayi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DatabayiController extends Controller
{
    public function indexbayi()
    {
        $databayii = Databayi::with(['posyandu', 'rekapbalita', 'rekapimunisasi', 'penyakit'])->get();
        // dd($databayii->posyandu);
        // return $databayii;
        return view('admin.keloladata.dataBalita', ['databayiList' => $databayii]);
    }

    // public function indexposyandu(){
    //     $dataposyandu = Posyandu::all();
    //     return view('admin.keloladata.dataBalita',['datadd' => $]);
    // }
}
