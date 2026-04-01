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
            'tanggal_surat.required'            => 'Tanggal Surat Tidak Boleh Kosong',
            'nomor_surat.required'              => 'Nomor Surat Tidak Boleh Kosong',
            'diterima_dari.required'            => 'Tidak Boleh Kosong',
            'perihal.required'                  => 'Perihal Surat Tidak Boleh Kosong',
            'sifat.required'                    => 'Sifat Surat Harus Dipilih',
            'diteruskan_kepada.required'        => 'Disposisi Surat Harus Dipilih',
            'dengan_hormat_harap.required'      => 'Disposisi Surat Harus Dipilih',
        ]);

        $suratmasuk = new suratmasuk;
        $suratmasuk->tanggal_surat   = $request->tanggal_surat;
        $suratmasuk->nomor_surat     = $request->nomor_surat;
        $suratmasuk->diterima_dari   = $request->diterima_dari;
        $suratmasuk->perihal         = $request->perihal;
        $suratmasuk->sifat           = $request->sifat;
        $suratmasuk->diteruskan_kepada = $request->diteruskan_kepada;
        $suratmasuk->tanggal_surat   = $request->tanggal_surat;
        $suratmasuk->save();
    }

}
