<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenispenyakit extends Model
{
    use HasFactory;

    protected $table = 'jenispenyakit';
    protected $fillable = [
        'jantung',
        'diabetes',
        'paru_paru',
        'ginjal',
        'hati',
        'kurang_darah',
        'malaria',
        'asma',
        'tbc',
        'epilepsi',
        'jiwa',
        'pms',
    ];
    
    public function databumil(){
        return $this->hasOne(Databumil::class);
    }


    public function databumil(){
        return $this->hasOne(Databumil::class);
    }

    // Jika Anda memiliki timestamp (created_at, updated_at), tambahkan properti berikut
    public $timestamps = false;

}
