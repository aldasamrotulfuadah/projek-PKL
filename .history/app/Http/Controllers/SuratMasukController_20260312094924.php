<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function index(){
        $data = array(
            'title'   => 'Data Surat Masuk',
            'menuSuratMasuk'   => 'suratmasuk::get(',
            'suratmasuk'   => 'active',
        );
        return view('suratm/suratmasuk',$data);
    }

}
