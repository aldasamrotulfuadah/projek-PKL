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
            'tanggal_surat'         => 'required',
            'nomor_surat'           => 'required',
            'diterima_dari'         => 'required',
            'perihal'               => 'required',
            'sifat'                 => 'required',
            'diteruskan_kepada'     => 'required',
            'dengan_hormat_harap'   => 'required',
        ],[
            'tanggal_surat.required'    => 'Tanggal Surat Tidak Boleh Kosong',
            'nomor_surat.required'    => 'Nomor Surat Tidak Boleh Kosong',
            'diterima_dari.required'    => 'Tanggal Surat Tidak Boleh Kosong',
            'perihal.required'    => 'Tanggal Surat Tidak Boleh Kosong',
            'sifat.required'    => 'Tanggal Surat Tidak Boleh Kosong',
            'diteruskan_kepada.required'    => 'Tanggal Surat Tidak Boleh Kosong',
            'dengan_hormat_harap.required'    => 'Tanggal Surat Tidak Boleh Kosong',
        ]);
    }

}
