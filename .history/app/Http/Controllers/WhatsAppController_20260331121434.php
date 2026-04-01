<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class WhatsAppController extends Controller
{
    public function kirim()
    {
        $response = Http::withHeaders([
            'Authorization' => env('FONNTE_TOKEN')
        ])->post('https://api.fonnte.com/send', [
            'target' => '6281234567890', // ganti nomor kamu
            'message' => 'Halo! Ini notifikasi dari Laravel 🚀'
        ]);

        return $response->json();
    }
}