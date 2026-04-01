<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
     protected $fillable = [
        'tanggal_surat',
        'nomor_surat',
        'Jabatan',
        'is_tugas',
        'password',
    ];
}
