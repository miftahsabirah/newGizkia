<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periksabumil extends Model
{
    use HasFactory;

    protected $table = 'periksabumil';
    protected $fillable = [
        'tanggal_periksa',
        'jenis_periksa',
        'tempat_periksa',
        'luar_gedung',
        'kode_petugas',
        'umur_kehamilan',
        'keluhan',
        'lila',
        'sistole',
        'diastole',
        'hb',
        'berat_badan',
        'tinggi_fundus',
        'jumlah_janin',
        'letak_janin',
        'posisi_janin',
        'denyut_janin',
        'lab',
        'yodium',
        'tindakan_fe',
        'fe1',
        'fe2',
        'fe3',
        'tindakan_tt',
        'tt1',
        'tt2',
        'tt3',
        'dirujuk',
        'posisi_tbj',
        'tbj',
        'kode_fe',
        'jumlah_fe',
        'obat_cacing',
        'tt4',
        'tt5',
        'hbsag',
        'rapid_test',
        'protein_urine',
        'gds',
        'ims',
        'nama',
    ];

    // Jika Anda memiliki timestamp (created_at, updated_at), tambahkan properti berikut
    public $timestamps = false;


    
}
