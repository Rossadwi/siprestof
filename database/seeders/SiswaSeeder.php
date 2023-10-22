<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswas')->insert([
            'nama' => 'Rossa Dwi Sukmawati',
            'nis' => '200631100022',
            'kelas_id' => 1,
            'telp' => '081232905662',
            'alamat' => 'Jombang',
        ]);

        DB::table('siswas')->insert([
            'nama' => 'Siska Saraswati',
            'nis' => '543212345',
            'kelas_id' => 2,
            'telp' => '089876543210',
            'alamat' => 'Jl. Siska Saraswati',
        ]);
    }
}
