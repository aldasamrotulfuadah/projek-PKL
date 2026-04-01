<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    public function index(){
        $data = array(
            'title'   => 'Data Surat Masuk',
            'menuSuratMasuk'   => 'active',
            'suratmasuk'   => suratkeluar::orderBy('sifat','asc')->get(),
        ); 
        return view('suratmk/suratkeluar',$data);
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
            'tanggal_surat'         => 'required|date',
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
        $suratmasuk->tanggal_surat              = $request->tanggal_surat;
        $suratmasuk->nomor_surat                = $request->nomor_surat;
        $suratmasuk->diterima_dari              = $request->diterima_dari;
        $suratmasuk->perihal                    = $request->perihal;
        $suratmasuk->sifat                      = $request->sifat;
        $suratmasuk->diteruskan_kepada          = $request->diteruskan_kepada;
        $suratmasuk->dengan_hormat_harap        = $request->dengan_hormat_harap;
        $suratmasuk->save();

        return redirect()->route('suratmasuk')->with('success','Data Berhasil Ditambahkan');
    }

    public function edit($id){
        $data = array(
            'title'   => 'Edit Data Surat Masuk',
            'menuSuratMasuk'   => 'active',
            'suratmasuk' => SuratMasuk::findOrFail($id),
        ); 
        return view('suratm/edit',$data);
    }

     public function update(Request $request, $id){
        $request->validate([
            'tanggal_surat'         => 'required|date',
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

        $suratmasuk = SuratMasuk::findOrFail($id);
        $suratmasuk->tanggal_surat              = $request->tanggal_surat;
        $suratmasuk->nomor_surat                = $request->nomor_surat;
        $suratmasuk->diterima_dari              = $request->diterima_dari;
        $suratmasuk->perihal                    = $request->perihal;
        $suratmasuk->sifat                      = $request->sifat;
        $suratmasuk->diteruskan_kepada          = $request->diteruskan_kepada;
        $suratmasuk->dengan_hormat_harap        = $request->dengan_hormat_harap;
        $suratmasuk->save();

        return redirect()->route('suratmasuk')->with('success','Data Berhasil Di Edit');
    }

    public function destroy($id){
        $suratmasuk = SuratMasuk::findOrFail($id);
        $suratmasuk->delete();

        return redirect()->route('suratmasuk')->with('success', 'Data Berhasil Di Hapus');
    }


}
