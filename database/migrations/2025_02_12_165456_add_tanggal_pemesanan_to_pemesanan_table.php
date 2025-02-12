<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('pemesanan', function (Blueprint $table) {
            $table->date('tanggal_pemesanan')->after('bukti_transaksi')->nullable();
        });
    }

    public function down()
    {
        Schema::table('pemesanan', function (Blueprint $table) {
            $table->dropColumn('tanggal_pemesanan');
        });
    }
};
