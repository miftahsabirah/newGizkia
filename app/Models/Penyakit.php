<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;

    protected $table = 'penyakit';
    protected $fillable = [
        'asfiksia',
        'hipotermi',
        'infeksi',
        'tetanus',
        'bblr',
        'komplikasi_lain',
    ];

    // Jika Anda memiliki timestamp (created_at, updated_at), tambahkan properti berikut
    public $timestamps = false;
}
