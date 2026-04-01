<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function index(){
        $data = array(
            'title'   => 'Data Surat Masuk',
            'menuSuratMasuk'   => 'active',
            'suratmasuk'   => suratmasuk::get(),
        ); 
        return view('suratm/suratmasuk',$data);
    }
    
    public function create(){
        $data = array(
            'title'   => 'Tambah Data Surat Masuk',
            'menuSuratMasuk'   => 'active',
        ); 
        return view('suratm/create',$data);
    }

    public function store(Request $request){
        $request->validate([
            'tanggal_surat'      => 'required',
            'email'     => 'required|unique:users,email',
            'Jabatan'   => 'required',
            'password'  => 'required|confirmed|min:8',
        ]);
    }

}
