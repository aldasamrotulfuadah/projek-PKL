<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
     protected $fillable = [
        'tanggal_surat',
        'nomor_surat',
        'diterima_dari',
        'perihal',
        'sifat',
        'dengan_hormat_harap',
        'dengan_hormat_harap',
    ];
}
