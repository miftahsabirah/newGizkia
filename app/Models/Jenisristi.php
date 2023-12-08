<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenisristi extends Model
{
    use HasFactory;

    protected $table = 'jenisristi';
    protected $fillable = [
        'resiko1',
        'resiko2',
        'resiko3',
        'resiko4',
        'resiko5',
        'resiko6',
        'resiko7',
        'resiko8',
        'resiko9',
        'resiko10',
        'resiko11',
    ];
    
    public function databumil(){
        return $this->hasOne(Databumil::class);
    }


    // Jika Anda memiliki timestamp (created_at, updated_at), tambahkan properti berikut
    public $timestamps = false;
}
