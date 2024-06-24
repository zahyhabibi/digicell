<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id('no_induk');
            $table->string('nama');
            $table->string('alamat');
            $table->enum('jurusan',array('Teknik Informatika', 'Sistem Informasi','DKV','Manajemen Informatika'));
            $table->enum('semester',array('1','2','3','4','5','6','7','8','9','10','11','12','13','14',));
            $table->enum('status',array('Mahasiswa Kampus','Mahasiswa Luar Kampus','Dosen'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
