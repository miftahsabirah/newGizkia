<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datadesa extends Model
{
    use HasFactory;

    protected $table = 'datadesa';
    protected $primaryKey = 'kode_desa';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'kode_desa',
        'users_id',
        'kode_kecamatan',
        'desa',
        'wilayah',
        'jumlah_dusun',
        'luas',
        'penduduk',
        'kode_pkm',
    ];

    public function datakecamatan()
    {
        return $this->belongsTo(Datakecamatan::class, 'kode_kecamatan', 'kode_kecamatan');
    }

    public function datadusuns()
    {
        return $this->hasMany(Datadusun::class, 'kode_dusun', 'kode_dusun');
    }

    public $timestamps = false;
}
