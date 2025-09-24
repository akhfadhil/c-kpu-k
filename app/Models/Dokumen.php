<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Dokumen extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_tps',
        'jenis_dokumen',
        'file_path'
    ];

    /**
     * Hubungan (relationship) dengan model Kecamatan.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tps()
    {
        return $this->belongsTo(tps::class, 'id_tps');

    }

    public function getJenisDokumenLabelAttribute()
    {
        $map = [
            'PPWP'  => 'Presiden & Wakil Presiden',
            'DPRRI' => 'DPR RI',
            'DPD'   => 'DPD',
            'DPRDP' => 'DPRD Provinsi',
            'DPRDK' => 'DPRD Kabupaten',
        ];

        // $this->jenis_dokumen harus sesuai nama kolom di DB
        return $map[$this->jenis_dokumen] ?? ucfirst($this->jenis_dokumen ?? '');
    }
}
