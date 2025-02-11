<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Tambahkan kolom baru jika belum ada
            if (!Schema::hasColumn('users', 'id_role')) {
                $table->unsignedBigInteger('id_role')->after('id');
            }

            if (!Schema::hasColumn('users', 'nama')) {
                $table->string('nama')->after('email');
            }

            if (!Schema::hasColumn('users', 'no_telp')) {
                $table->string('no_telp', 15)->nullable()->after('nama');
            }

            if (!Schema::hasColumn('users', 'domisili')) {
                $table->string('domisili')->nullable()->after('no_telp');
            }

            if (!Schema::hasColumn('users', 'tanggal_lahir')) {
                $table->date('tanggal_lahir')->nullable()->after('domisili');
            }

            // Drop kolom yang tidak diperlukan
            if (Schema::hasColumn('users', 'name')) {
                $table->dropColumn('name');
            }

            if (Schema::hasColumn('users', 'email_verified_at')) {
                $table->dropColumn('email_verified_at');
            }

            if (Schema::hasColumn('users', 'remember_token')) {
                $table->dropColumn('remember_token');
            }
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name')->nullable()->after('id');
            $table->timestamp('email_verified_at')->nullable()->after('email');
            $table->rememberToken()->after('password');
            $table->dropColumn(['id_role', 'nama', 'no_telp', 'domisili', 'tanggal_lahir']);
        });
    }
};
