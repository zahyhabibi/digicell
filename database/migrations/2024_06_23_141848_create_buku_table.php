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
        Schema::create('buku', function (Blueprint $table) {
            $table->id('id_buku');
            $table->string('judul_buku');
            $table->enum('status',array('Tersedia','Dipinjam','Hilang','Dalam Perbaikan'));
            $table->string('tahun_terbit');
            $table->string('jumlah_halaman');
            $table->enum('jenis_buku',array('Fiksi','Edukasi','Agama','Biografi'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
