<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    public function index(){
        $data = array(
            'title'             => 'Data Surat Keluar',
            'menuSuratKeluar'   => 'active',
        );
        return view('suratk/suratkeluar',$data);
    }
}
