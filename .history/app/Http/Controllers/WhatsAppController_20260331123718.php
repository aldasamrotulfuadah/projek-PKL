use App\Models\SuratMasuk;
use Illuminate\Support\Facades\Http;

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