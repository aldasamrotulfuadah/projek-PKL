<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function index(){
        $data = array(
            'title'   => ''
        )
        return view('suratmasuk');
    }
}
