<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Support\Facades\Http;

class WhatsAppController extends Controller
{
    public function kirimSurat($id)
{
    $surat = SuratMasuk::findOrFail($id);

    // ⚠️ pastikan kamu punya kolom no_hp di database
    $phone = preg_replace('/^0/', '62', $surat->no_hp);

    $message = "📩 *SURAT MASUK*\n\n"
        . "Tanggal: {$surat->tanggal_surat}\n"
        . "No Surat: {$surat->nomor_surat}\n"
        . "Dari: {$surat->diterima_dari}\n"
        . "Perihal: {$surat->perihal}\n"
        . "Sifat: {$surat->sifat}\n"
        . "Diteruskan: {$surat->diteruskan_kepada}\n"
        . "Catatan: {$surat->dengan_hormat_harap}";

    Http::withHeaders([
        'Authorization' => env('FONNTE_TOKEN')
    ])->post('https://api.fonnte.com/send', [
        'target' => $phone,
        'message' => $message
    ]);

    return back()->with('success', 'Berhasil kirim ke WhatsApp!');
}
🧩 4. PENTING — Tambah Kolom Nomor HP

Di tabel surat_masuk, harus ada:

no_hp

Kalau belum ada → WA nggak tahu mau dikirim ke siapa ❌

🎯 Hasil Akhir

Sekarang di tabel kamu:

✅ Ada tombol edit
✅ Ada tombol hapus
✅ Ada tombol WhatsApp 🟢

👉 Klik tombol WA:

Ambil data surat
Format jadi pesan
Kirim ke WhatsApp via API
⚠️ Kalau Mau Tanpa API (Lebih Simpel)

Kalau kamu nggak mau pakai Fonnte, bisa langsung buka WhatsApp:

<a href="https://wa.me/{{ $item->no_hp }}?text=Halo {{ $item->nomor_surat }}" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

👉 Ini cuma buka WhatsApp, bukan kirim otomatis

💡 Saran Biar Lebih Keren
Tambahin alert sukses:
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
Bisa kirim ke banyak nomor
Bisa auto kirim saat input data

Kalau kamu mau, aku bisa bantu:
👉 bikin format pesan rapi (bold, enter, dll)
👉 atau bikin kirim ke banyak nomor sekaligus
👉 atau debug kalau belum kekirim

Tinggal bilang aja 👍

Get smarter responses, upload files and images, and more.
Log in
Sign up for free
}