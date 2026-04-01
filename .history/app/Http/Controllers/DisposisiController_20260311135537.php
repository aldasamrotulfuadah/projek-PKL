<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisposisiController extends Controller
{
    public function index(){
        $data = array(
            'title'             => 'Data Surat Keluar',
            'menuDisposisi'   => 'active',
        );
        return view('suratkeluar',$data);
    }
}
