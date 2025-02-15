<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateStatusEnumInPemesananTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('pemesanan', function (Blueprint $table) {
            $table->enum('status', [
                'Menunggu Pembayaran',
                'Pembayaran Berhasil',
                'Progress',
                'Revisi',
                'Gagal',
                'Selesai'
            ])->default('Menunggu Pembayaran')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('pemesanan', function (Blueprint $table) {
            $table->enum('status', [
                'diverifikasi',
                'progress',
                'revisi',
                'berhasil',
                'gagal'
            ])->default('diverifikasi')->change();
        });
    }
}