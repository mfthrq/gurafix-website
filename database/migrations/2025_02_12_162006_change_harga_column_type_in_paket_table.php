<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('paket', function (Blueprint $table) {
            $table->integer('harga')->change();
        });
    }

    public function down()
    {
        Schema::table('paket', function (Blueprint $table) {
            $table->decimal('harga', 10, 2)->change(); // Ubah kembali ke decimal jika rollback
        });
    }
};
