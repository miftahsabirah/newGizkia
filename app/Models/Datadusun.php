<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datadusun extends Model
{
    use HasFactory;

    protected $table = 'datadusun';
    protected $primaryKey = 'kode_dusun';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'kode_dusun',
        'nama',
        'dusun',
        'jumlah_penduduk',
    ];

    public function datadesa()
    {
        return $this->belongsTo(Datadesa::class, 'kode_dusun', 'kode_dusun');
    }

    public $timestamps = false;
}
