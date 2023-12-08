<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekapimunisasi extends Model
{
    use HasFactory;

    protected $table = 'rekapimunisasi';
    protected $fillable = [
        'bcg',
        'dpt_1',
        'dpt_2',
        'dpt_3',
        'polio_1',
        'polio_2',
        'polio_3',
        'ipv',
        'campak',
        'boosterpentavalen',
        'boostercampak',
        'hepatitis_0',
        'hepatitis_1',
        'hepatitis_2',
        'hepatitis_3',
        'noe_natal_1',
        'noe_natal_2',
        'noe_natal_3',
    ];

    // Jika Anda memiliki timestamp (created_at, updated_at), tambahkan properti berikut
    public $timestamps = false;

    public function databayi()
    {
        return $this->hasOne(Databayi::class);
    }
    

}
