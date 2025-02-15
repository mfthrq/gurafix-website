<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenamePelangganRefrensiDesainInPemesanan extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('pemesanan', function (Blueprint $table) {
            $table->renameColumn('pelanggan_refrensi_desain', 'pelanggan_referensi_desain');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('pemesanan', function (Blueprint $table) {
            $table->renameColumn('pelanggan_referensi_desain', 'pelanggan_refrensi_desain');
        });
    }
}
