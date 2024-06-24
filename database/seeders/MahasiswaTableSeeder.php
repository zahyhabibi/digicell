<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MahasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            'no_induk' =>'214421',
            'nama' =>'asep Surya',
            'alamat' =>'jalan banceut no 23',
            'jurusan' => 'Teknik Informatika',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
