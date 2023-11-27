<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Databayi extends Model
{
    use HasFactory;
    protected $table = 'databayi';
    protected $primaryKey = 'no_index_balita';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'no_index_balita',
        'kode_posyandu',
        'id_rekapimunisasi',
        'id_rekapbalita',
        'penyakit',
        'no_index',
        'akte',
        'nokk',
        'nama_bayi',
        'tanggal_lahir',
        'jenis_kelamin',
        'nama_ibu',
        'nama_ayah',
        'gakin',
        'rt',
        'rw',
        'tb_terakhir',
        'bb_terakhir',
        'tanggal_timbang_terakhir',
        'stunting',
        'cekidl',
        'cekbadutq',
        'status_bbu',
        'status_tbu',
        'status_bbtb',
        'tanggal_register',
        'kode_tempat',
        'alamat',
        'kode_wilayah',
        'dirujuk',
        'no_telepon_ortu',
        'kode_suku',
        'nik',
        'no_kartu',
        'nik_ibu',
        'anak_ke',
        'hb024',
        'bayi_id',
        'bayi_kategori',
        'aktif',
    ];


    /**
     * Get the posyandu that owns the Databayi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function posyandu(): BelongsTo
    {
        return $this->belongsTo(Posyandu::class, 'kode_posyandu', 'kode_posyandu');
    }

    public function rekapbalita()
    {
        return $this->belongsTo(Rekapbalita::class, 'id_rekapbalita', 'id');
    }

    public function rekapimunisasi()
    {
        return $this->belongsTo(Rekapimunisasi::class, 'id_rekapimunisasi', 'id');
    }

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class, 'penyakit', 'id');
    }

    public $timestamps = false;

}
