<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Databumil;
use Illuminate\Http\Request;

class DatabumilController extends Controller
{
    public function indexbumil()
    {
        $databumil = Databumil::with(['jenispenyakit', 'jenisfaktor', 'jenisristi', 'periksabumil'])->get();
        // dd($databayii->posyandu);
        // return $databayii;
        return view('admin.keloladata.dataBumil', ['databumilList' => $databumil]);
    }
}
