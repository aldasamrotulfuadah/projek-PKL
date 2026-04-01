<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Http;

class WhatsAppController extends Controller
{
    public function coba()
    {
        $response = Http::withHeaders([
            'Authorization' => env('FONNTE_TOKEN')
        ])->post('https://api.fonnte.com/send', [
            'target' => '08998296117', 
            'message' => 'Halo! Ini notifikasi dari Laravel'
        ]);

        return $response->json();
    }
}