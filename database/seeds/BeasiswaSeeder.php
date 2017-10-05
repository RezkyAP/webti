<?php

use Illuminate\Database\Seeder;
use App\Beasiswa;
class BeasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Beasiswa::create([
            'namabeasiswa' => 'Ruang Kuliah',
            'foto' => 'kuliah.jpg',
            'deskripsi' => 'kuliah.jpg',
        ]);
        Beasiswa::create([
            'namabeasiswa' => 'Ruang Kuliah',
            'foto' => 'kuliah.jpg',
            'deskripsi' => 'kuliah.jpg',
        ]);
    }
}
