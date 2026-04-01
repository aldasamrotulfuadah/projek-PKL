<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('surat_masuks', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_surat');
            $table->string('nomor_surat');
            $table->string('diterima_dari');
            $table->string('perihal');
            $table->enum('sifat',['Sangat Segera', 'Segera', 'Rahasia']);
            $table->enum('diteruskan_kepada',['Sekretaris','Wasbang','Wasnas', 'Poldagri']);
            $table->enum('dengan_hormat_harap',['Tanggapan dan Saran','Proses Lebih Lanjut', 'Koordinasi/Konsultasi', 'Bahan Pertimbangan']);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_masuks');
    }
};
