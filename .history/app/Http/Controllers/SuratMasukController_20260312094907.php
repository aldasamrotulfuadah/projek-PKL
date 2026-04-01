<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function index(){
        $data = array(
            'title'   => 'Data Surat Masuk',
            'menuSuratMasuk'   => 'active',
            'surat'   => 'active',
        );
        return view('suratm/suratmasuk',$data);
    }

}
