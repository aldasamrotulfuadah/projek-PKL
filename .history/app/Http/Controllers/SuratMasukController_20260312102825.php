<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function index(){
        $data = array(
            'title'   => 'Data Surat Masuk',
            'suratmasuk'   => 'suratmasuk::get()',
            'menuSuratMasuk'   => ),
        ); 
        return view('suratm/suratmasuk',$data);
    }

}
