<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class WhatsAppController extends Controller
{
    public function kirimSurat($id)
{
    // 1. Ambil data dari database
    $surat = suratMasuk::findOrFail($id);

    // 2. Ambil nomor HP
    $phone = preg_replace('/^0/', '62', $surat->no_hp);

    // 3. Susun isi pesan
    $message = "📩 SURAT MASUK\n\n";
    $message .= "No Surat: " . $surat->nomor_surat . "\n";
    $message .= "Pengirim: " . $surat->diterima_dari . "\n";
    $message .= "Perihal: " . $surat->perihal . "\n";

    // 4. Kirim ke Fonnte
    Http::withHeaders([
        'Authorization' => env('FONNTE_TOKEN')
    ])->post('https://api.fonnte.com/send', [
        'target' => $phone,
        'message' => $message
    ]);

    // 5. Balik ke halaman sebelumnya
    return back()->with('success', 'Berhasil kirim WA');
}
}