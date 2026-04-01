<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
     protected $fillable = [
        'Tanggal Surat',
        'email',
        'Jabatan',
        'is_tugas',
        'password',
    ];
}
