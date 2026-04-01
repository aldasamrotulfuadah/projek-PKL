<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
     protected $fillable = [
        'tanggal_surat',
        'email',
        'Jabatan',
        'is_tugas',
        'password',
    ];
}
