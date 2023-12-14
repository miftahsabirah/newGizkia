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
        $posyandus = Posyandu::all();

        $countPerbayi = [];
        $countPerbayi2 = [];
        $countPerbayi3 = [];
        $countPerbayi4 = [];

        $databayii = ['jenis_kelamin', 'tanggal_meniggal'];
        $databayi2 = ['tanggal_register', 'tanggal_lahir'];
        $databayi3 = ['jenis_kelamin'];
        $databayi4 = ['jenis_kelamin', 'tanggal_meniggal'];

        foreach ($posyandus as $posyandu) {
            $countPerbayi[$posyandu->kode_posyandu] = [];
            foreach ($posyandu->databayi as $bayi) {
                foreach ($databayii as $key) {
                    if ($bayi->rekapbalita->$key) {
                        if (!isset($countPerbayi[$posyandu->kode_posyandu][$key])) {
                            $countPerbayi[$posyandu->kode_posyandu][$key] = 0;
                        }

                        $countPerbayi[$posyandu->kode_posyandu][$key]++;
                    }
                }
            }

            $countPerbayi2[$posyandu->kode_posyandu] = [];
            foreach ($posyandu->databayi as $bayi) {
                foreach ($databayi2 as $key) {
                    if ($bayi->$key) {
                        if (!isset($countPerbayi2[$posyandu->kode_posyandu][$key])) {
                            $countPerbayi2[$posyandu->kode_posyandu][$key] = 0;
                        }

                        $countPerbayi2[$posyandu->kode_posyandu][$key]++;
                    }
                }
            }

            $countPerbayi3[$posyandu->kode_posyandu] = ['laki-laki' => 0, 'perempuan' => 0];
            foreach ($posyandu->databayi as $bayi) {
                foreach ($databayi3 as $key) {
                    if ($key === 'jenis_kelamin' && in_array($bayi->$key, ['laki-laki', 'perempuan'])) {
                        $countPerbayi3[$posyandu->kode_posyandu][$bayi->$key]++;
                    }
                }
            }


            $countPerbayi4[$posyandu->kode_posyandu] = ['laki-laki' => 0, 'perempuan' => 0];
            foreach ($posyandu->databayi as $bayi) {
                // Assuming 'jenis_kelamin' is in 'databayi'
                $gender = $bayi->jenis_kelamin;
            
                // Check if the baby has a date of death in the 'rekapbalita' table
                $dateOfDeath = $bayi->rekapbalita->tanggal_meniggal;
            
                if ($gender && $dateOfDeath) {
                    $countPerbayi4[$posyandu->kode_posyandu][$gender]++;
                }
            }
        }

        return view('admin.rekapitulasi.anak', [
            'posyandus' => $posyandus,
            'countPerbayi' => $countPerbayi,
            'countPerbayi2' => $countPerbayi2,
            'countPerbayi3' => $countPerbayi3,
            'countPerbayi4' => $countPerbayi4,
        ]);
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
        $posyandugizi = Posyandu::all();

        $coutngizi = [];
        $coutngizi2 = [];
        $datagizi = ['tanggal_register', 'gakin', 'tanggal_timbang_terakhir'];
        $datagizi2 = ['jenis_kelamin'];

        foreach ($posyandugizi as $posyandu) {
            $coutngizi[$posyandu->kode_posyandu] = [];
            foreach ($posyandu->databayi as $bayi) {
                foreach ($datagizi as $key) {
                    if ($bayi->$key) {
                        if (!isset($coutngizi[$posyandu->kode_posyandu][$key])) {
                            $coutngizi[$posyandu->kode_posyandu][$key] = 0;
                        }

                        $coutngizi[$posyandu->kode_posyandu][$key]++;
                    }
                }
            }

            $coutngizi2[$posyandu->kode_posyandu] = ['laki-laki' => 0, 'perempuan' => 0];
            foreach ($posyandu->databayi as $bayi) {
                foreach ($datagizi2 as $key) {
                    if ($key === 'jenis_kelamin' && in_array($bayi->$key, ['laki-laki', 'perempuan'])) {
                        $coutngizi2[$posyandu->kode_posyandu][$bayi->$key]++;
                    }
                }
            }
        }

        return view('admin.rekapitulasi.gizi', [
            'posyandus' => $posyandugizi,
            'datagizi' => $coutngizi, 
            'datagizi2' => $coutngizi2
        ]);
    }
}
