<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Support\Facades\Http;

class WhatsAppController extends Controller
{
    public function kirimSurat($id)
    {
        // 1️⃣ Ambil data dari database
        $surat = SuratMasuk::findOrFail($id);

        // 2️⃣ Ambil nomor HP dan format aman
        $phone = $this->formatNomorHP($surat->no_hp);
        if (!$phone) {
            return back()->with('error', 'Nomor HP tidak tersedia atau salah format!');
        }

        // 3️⃣ Susun isi pesan, aman handle null
        $message = "📩 SURAT MASUK\n\n";
        $message .= "Tanggal Surat: " . ($surat->tanggal_surat ?? '-') . "\n";
        $message .= "Nomor Surat: " . ($surat->nomor_surat ?? '-') . "\n";
        $message .= "Pengirim: " . ($surat->diterima_dari ?? '-') . "\n";
        $message .= "Perihal: " . ($surat->perihal ?? '-') . "\n";
        $message .= "Sifat: " . ($surat->sifat ?? '-') . "\n";
        $message .= "Dengan Hormat Harap: " . ($surat->dengan_hormat_harap ?? '-') . "\n";
        $message .= "Diteruskan Kepada: " . ($surat->diteruskan_kepada ?? '-') . "\n";

        // 4️⃣ Kirim ke Fonnte
        try {
            $response = Http::withHeaders([
                'Authorization' => env('FONNTE_TOKEN')
            ])->post('https://api.fonnte.com/send', [
                'target' => $phone,
                'message' => $message
            ]);

            $res = $response->json();
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal kirim WA: ' . $e->getMessage());
        }

        // 5️⃣ Kembalikan response ke user
        if (isset($res['success']) && $res['success']) {
            return back()->with('success', 'WA berhasil dikirim!');
        } else {
            return back()->with('error', 'WA gagal dikirim: ' . ($res['message'] ?? 'Unknown error'));
        }
    }

    // Fungsi bantu format nomor HP
    private function formatNomorHP($no_hp)
    {
        if (!$no_hp) return null;

        // Hilangkan spasi, strip, dan tanda +
        $no_hp = preg_replace('/[^0-9]/', '', $no_hp);

        // Jika awalnya 0, ganti dengan 62
        if (substr($no_hp, 0, 1) === '0') {
            $no_hp = '62' . substr($no_hp, 1);
        }

        // Cek panjang minimal (misal 10 digit)
        if (strlen($no_hp) < 10) return null;

        return $no_hp;
    }
}