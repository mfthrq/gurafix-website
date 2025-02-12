<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('chat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_sender');
            $table->unsignedBigInteger('id_receiver');
            $table->text('message')->nullable();
            $table->string('attachments')->nullable();
            $table->timestamps();

            // Jika ada tabel users, bisa ditambahkan foreign key
            $table->foreign('id_sender')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_receiver')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('chat');
    }
};
