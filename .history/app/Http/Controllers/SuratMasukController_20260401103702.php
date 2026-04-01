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
            'suratmasuk'   => suratmasuk::orderBy('sifat','asc')->get(),
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
        $suratmasuk->no_wa = $request->no_wa;
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
        $suratmasuk->no_wa = $request->no_wa;
        $suratmasuk->save();

        return redirect()->route('suratmasuk')->with('success','Data Berhasil Di Edit');
    }

    public function destroy($id){
        $suratmasuk = SuratMasuk::findOrFail($id);
        $suratmasuk->delete();

        return redirect()->route('suratmasuk')->with('success', 'Data Berhasil Di Hapus');
    }

        public function kirimWaSurat(Request $request, $id)
    {
        $data = SuratMasuk::findOrFail($id);

        $pesan = "📩 *SURAT MASUK*\n\n".
                "Tanggal Surat: ".$data->tanggal_surat."\n".
                "Nomor Surat: ".$data->nomor_surat."\n".
                "Diterima Dari: ".$data->diterima_dari."\n".
                "Perihal: ".$data->perihal;
                "Sifat: ".$data->sifat;
                "Dengan Hormat Harap: ".$data->dengan_hormat_harap;
                "Deng ".$data->dengan_hormat_harap;

        $target = $request->no_wa; // Ambil nomor yang dipilih

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.fonnte.com/send",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => [
                "target" => $target,
                "message" => $pesan,
            ],
            CURLOPT_HTTPHEADER => [
                "Authorization: TOKEN_KAMU"
            ],
        ]);

        curl_exec($curl);
        curl_close($curl);

        return back()->with('success', 'Pesan berhasil dikirim!');
    }


}
