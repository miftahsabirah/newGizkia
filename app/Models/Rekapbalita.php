<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekapbalita extends Model
{
    use HasFactory;

    protected $table = 'rekapbalita'; // Sesuaikan dengan nama tabel yang sebenarnya

    protected $fillable = [
        'umur_bayi_meniggal',
        'tempat_bayi_meniggal',
        'penyebab_bayi_meniggal',
        'meniggal',
        'tanggal_meniggal',
        'gizi_buruk',
        'berat_bayi',
        'linkar_kepala',
        'pindah',
        'tanggal_pindah',
        'status_tumbuh_kembang',
    ];

    public function databayi()
    {
        return $this->hasOne(Databayi::class);
    }
    
    public $timestamps = false;
}
