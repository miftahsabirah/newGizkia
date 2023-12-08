<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenisfaktor extends Model
{
    use HasFactory;

    protected $table = 'jenisfaktor';
    protected $fillable = [
        'faktor1',
        'faktor2',
        'faktor3',
        'faktor4',
        'faktor5',
        'faktor6',
    ];
    public function databumil(){
        return $this->hasOne(Databumil::class);
    }

    // Jika Anda memiliki timestamp (created_at, updated_at), tambahkan properti berikut
    public $timestamps = false;
}
