<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datakecamatan extends Model
{
    use HasFactory;

    protected $table = 'datakecamatan';
    protected $primaryKey = 'kode_kecamatan';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'kode_kecamatan',
        'kecamatan',
    ];

    public function datadesas()
    {
        return $this->hasMany(Datadesa::class, 'kode_kecamatan', 'kode_kecamatan');
    }

    public $timestamps = false;
}
