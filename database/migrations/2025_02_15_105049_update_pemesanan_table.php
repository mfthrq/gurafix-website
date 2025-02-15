<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePemesananTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('pemesanan', function (Blueprint $table) {
            // Hapus kolom bukti_transaksi
            $table->dropColumn('bukti_transaksi');

            // Tambahkan kolom pelanggan_refrensi_desain dan pelanggan_brief setelah kolom id_paket
            $table->string('pelanggan_refrensi_desain')->nullable()->after('id_paket');
            $table->text('pelanggan_brief')->nullable()->after('pelanggan_refrensi_desain');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('pemesanan', function (Blueprint $table) {
            // Tambahkan kembali kolom bukti_transaksi
            $table->string('bukti_transaksi')->nullable()->after('id_paket');

            // Hapus kolom pelanggan_refrensi_desain dan pelanggan_brief
            $table->dropColumn(['pelanggan_refrensi_desain', 'pelanggan_brief']);
        });
    }
}
