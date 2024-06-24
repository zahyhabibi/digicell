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
        Schema::create('peminjam', function (Blueprint $table) {
            $table->id('id_peminjam');
            $table->string('no_induk')->unique();
            $table->string('id_buku')->unique();
            $table->string('nama')->unique();
            $table->string('alamat')->unique();
            $table->string('no_telp');
            $table->string('judulbuku')->unique();
            $table->date('tanggal_pengembalian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjam');
    }
};
