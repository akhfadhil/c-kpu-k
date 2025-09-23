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
}
