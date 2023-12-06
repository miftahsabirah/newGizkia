<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infoawalbumil extends Model
{
    use HasFactory;

    protected $table = 'infoawalbumil';
    protected $primaryKey = 'no_indek_infobumil';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'no_index_infobumil',
        'kode_posyandu',
        'tgl_informasi',
        'nama',
        'suami',
        'alamat',
        'user_id_pelapor',
        'verifikasi',
        'lat',
        'lng',
        'no_telepon',
    ];

    public function posyandu()
    {
        return $this->belongsTo(Posyandu::class, 'kode_posyandu', 'kode_posyandu');
    }
    public $timestamps = false;
}
