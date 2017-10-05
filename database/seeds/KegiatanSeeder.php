<?php

use Illuminate\Database\Seeder;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kegiatan::create([
            'namakegiatan' => 'XProject',
            'foto' => 'kuliah.jpg',
            'deskripsi' => 'XProject adalah kegiatan tahunan yang diadakan oleh Jurusan Teknik Informatika. XProject merupakan acara puncak dari serangkaian acara akademik yang diadakan oleh Teknik Informatika. ',
        ]);
        Kegiatan::create([
            'namakegiatan' => 'Wallpaper Design Competition',
            'foto' => 'kuliah.jpg',
            'deskripsi' => 'WDC adalah Wallpaper Design Competition ',
        ]);
    }
}
