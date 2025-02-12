<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pelanggan')->constrained('users')->onDelete('cascade');
            $table->foreignId('id_layanan')->constrained('layanan')->onDelete('cascade');
            $table->foreignId('id_paket')->constrained('paket')->onDelete('cascade');
            $table->string('bukti_transaksi')->nullable();
            $table->enum('status', ['diverifikasi', 'progress', 'revisi', 'berhasil', 'gagal'])->default('diverifikasi');
            $table->string('link_desain')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pemesanan');
    }
};
