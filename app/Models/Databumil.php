<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Databumil extends Model
{
    use HasFactory;
    protected $table = 'databumil';
    protected $primaryKey = 'no_index_bumil';
    public $incrementing = false; // Assuming 'no_index_bumil' is not an auto-incrementing primary key
    protected $keyType = 'string';

    protected $fillable = [
        'no_index_bumil',
        'id_jenispenyakit',
        'id_jenisfaktor',
        'id_jenisristi',
        'id_periksabumil',
        'tgl_register',
        'tgl_lahir',
        'bbawal',
        'umur',
        'umur_kehamilan',
        'jenis_persalinan',
        'no_telepon_istri',
        'htp',
        'jenisristi',
        'g',
        'p',
        'a',
        'lila',
        'sistole_akhir',
        'diastole_akhir',
        'hb_akhir',
        'rt',
        'rw',
        'tanggal_melahirkan',
        'penolong',
        'cara_lahir',
        'kondisi_bayi',
        'kondisi_ibu',
        'konseling_pasca_salin',
        'jenis_gakin',
    ];

    public function jenispenyakit()
    {
        return $this->belongsTo(Jenispenyakit::class, 'id_jenispenyakit');
    }

    public function jenisfaktor()
    {
        return $this->belongsTo(Jenisfaktor::class, 'id_jenisfaktor');
    }

    public function jenisristi()
    {
        return $this->belongsTo(Jenisristi::class, 'id_jenisristi');
    }

    public function periksabumil()
    {
        return $this->belongsTo(Periksabumil::class, 'id_periksabumil');
    }
    public function infoawalbumil() {
        return $this->belongsTo(infoawalbumil::class, 'id_periksabumil', 'no_index_infobumil');
    }
}
