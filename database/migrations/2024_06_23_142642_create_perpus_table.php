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
        Schema::create('perpus', function (Blueprint $table) {
            $table->id('NIP');
            $table->string('Nama_petugas');
            $table->string('buku_tersedia')->unique();
            $table->string('buku_tidak_tersedia')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perpus');
    }
};
