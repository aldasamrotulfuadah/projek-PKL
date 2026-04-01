<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
     protected $fillable = [
        'nama',
        'email',
        'Jabatan',
        'is_tugas',
        'password',
    ];
}
