<?php

namespace App\Http\Controllers;

use App\Models\Databayi;
use App\Models\Databumil;
use Illuminate\Http\Request;
use App\Models\Rekapimunisasi;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Posyandu;
use App\Models\Rekapbalita;

use function Laravel\Prompts\select;

class RekapitulasiController extends Controller
{
    public function indexrekapbumil()
    {
        $posyandu = Posyandu::all();

        // dd($posyandu);
        $countPerVaccine = [];

        $vaccines = [
            'tgl_register', 'tanggal_melahirkan', 'konseling_pasca_salin', 'tanggal_periksa', 'tindakan_fe',
        ];
        // dd($vaccines);
        dd($posyandu[0]->infoawalbumil());

        foreach ($posyandu as $posyandu) {
            $countPerVaccine[$posyandu->kode_posyandu] = [];
            foreach ($posyandu->infoawalbumil as $bumil) {
                dd($bumil->databumil);
                foreach ($bumil->databumil as $databumil) {
                    // dd($databumil->periksabumil);
                    foreach ($vaccines as $vaccine) {
                        if ($databumil->periksabumil > $vaccine) {
                            if (!isset($countPerVaccine[$posyandu->kode_posyandu][$vaccine])) {
                                $countPerVaccine[$posyandu->kode_posyandu][$vaccine] = 0;
                            }
                            $countPerVaccine[$posyandu->kode_posyandu][$vaccine]++;
                        }
                    }
                }
            }
        }

        // Debugging statement
        // dd($countPerVaccine);

        return view('admin.rekapitulasi.bumil', [
            'posyandus' => Posyandu::all(),
            'countPerVaccine' => $countPerVaccine
        ]);
    }
    public function indexrekapbalita()
    {
        $databayii = Databayi::with(['posyandu', 'rekapbalita', 'rekapimunisasi', 'penyakit'])->get();


        return view('admin.rekapitulasi.anak', ['databayiList' => $databayii]);
    }
    public function indexrekapuminisasi()
    {
        $posyandu = Posyandu::all();

        // dd($posyandu);
        $countPerVaccine = [];

        $vaccines = [
            'bcg', 'dpt_1', 'dpt_2', 'dpt_3', 'polio_1', 'polio_2', 'polio_3',
            'ipv', 'campak', 'boosterpentavalen', 'boostercampak', 'hepatitis_0',
            'hepatitis_1', 'hepatitis_2', 'hepatitis_3', 'noe_natal_1', 'noe_natal_2', 'noe_natal_3',
        ];
        // dd($vaccines);


        // dd($posyandu[0]->databayi);

        foreach ($posyandu as $posyandu) {
            $countPerVaccine[$posyandu->kode_posyandu] = [];
            foreach ($posyandu->databayi as $bayi) {
                // dd($bayi->rekapimunisasi);
                foreach ($vaccines as $vaccine) {
                    if ($bayi->rekapimunisasi->$vaccine) {
                        if (!isset($countPerVaccine[$posyandu->kode_posyandu][$vaccine])) {
                            $countPerVaccine[$posyandu->kode_posyandu][$vaccine] = 0;
                        }
                        $countPerVaccine[$posyandu->kode_posyandu][$vaccine]++;
                    }
                }
            }
        }

        // Debugging statement
        // dd($countPerVaccine);

        return view('admin.rekapitulasi.imunisasi', [
            'posyandus' => Posyandu::all(),
            'countPerVaccine' => $countPerVaccine
        ]);
    }

    public function indexrekapgizi()
    {
    }
}
