<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('paket', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('gambar_paket');
            $table->foreignId('id_layanan')->constrained('layanan')->onDelete('cascade');
            $table->text('fitur');
            $table->decimal('harga', 10, 2);
            $table->integer('durasi_pengerjaan');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('paket');
    }
};
