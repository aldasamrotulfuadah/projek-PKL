<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisposisiController extends Controller
{
    public function index(){
        $data = array(
            'title'             => 'Disposisi',
            'menuDisposisi'   => 'active',
        );
        return view('disposisi',$data);
    }
}
