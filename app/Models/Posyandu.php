<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posyandu extends Model
{
    use HasFactory;

    protected $table = 'posyandu';
    protected $primaryKey = 'kode_posyandu';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'kode_posyandu',
        'kode_desa',
        'kode_dusun',
        'posyandu',
        'kode_bidan',
        'jumlah_kader',
        'jenis',
    ];

    public function desa()
    {
        return $this->belongsTo(DataDesa::class, 'kode_desa', 'kode_desa');
    }

    public function dusun()
    {
        return $this->belongsTo(Datadusun::class, 'kode_dusun', 'kode_dusun');
    }

    public function databayi()
    {
        return $this->hasMany(Databayi::class, 'kode_posyandu', 'kode_posyandu');
    }
    public function infoawalbumil()
    {
        return $this->hasMany(infoawalbumil::class);
    }

    public $timestamps = false;
}
