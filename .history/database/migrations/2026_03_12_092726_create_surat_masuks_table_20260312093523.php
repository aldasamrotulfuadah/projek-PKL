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
            $table->string('tanggal_surat');
            $table->string('nomor_surat');
            $table->string('diterima_dari');
            $table->string('perihal');
            $table->string('sifat');
            $table->enum('Dengan_Hormat_Harap',['Admin','Bidang']);
            $table->enum('diteruskan_kepada');
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
