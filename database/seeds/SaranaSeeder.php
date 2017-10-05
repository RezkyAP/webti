<?php

use Illuminate\Database\Seeder;
use App\Sarana;

class SaranaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sarana::create([
            'nama' => 'Ruang Kuliah',
            'foto' => 'kuliah.jpg',
            'deskripsi' => 'Pada kelas ini digunakan untuk proses belajar mengajar prodi D3 Manajemen Informatika, S1 Pendidikan Teknologi Informasi, S1 Teknik Informatika, dan S1 Sistem Informasi. Teknik Informatika Universitas Negeri Surabaya memiliki kurang lebih 20 ruang kuliah.',
        ]);

        Sarana::create([
            'nama' => 'Lab RPL',
            'foto' => 'RPL.jpg',
            'deskripsi' => 'Pada laboratoium ini digunakan untuk melayani praktikum Prodi D3 Manajemen Informatika untuk mata kuliah Algoritma dan Pemrograman, Pemrograman Struktur Data, Pemrograman Berorientasi Objek, Pemrograman Web 1, Pemrograman Web 2, Pemrograman Visual 1, Pemrograman Visual 2, dan Mobile Programming,serta Dasar-dasar pemrograman (Struktur Data, Pemrograman Berbasis Objek, Rekayasa Perangkat Lunak, Teknik Komputasi, Kecerdasan Buatan, Mobile Programming, dan Pemrograman Game)',
        ]);
        Sarana::create([
            'nama' => 'Lab Jaringan Komputer',
            'foto' => 'labjarkom.jpg',
            'deskripsi' => 'Pada laboratoium ini digunakan untuk melayani praktikum Prodi D3 Manajemen Informatika untuk mata kuliah Sistem Operasi, Jaringan Komputer 1, Jaringan Komputer 2, Jaringan Komputer 3, Manajemen Jaringan, dan Keamanan Jaringan; juga Prodi S1 Pendidikan Teknik Informatika Sistem Operasi, Komunikasi Data, Arsitektur dan Jaringan Komputer, Embeded Sistem, Jaringan Komputer, Jaringan Komputer Lanjut, Manajemen Jaringan, Keamanan Jaringan, Jaringan Nirkabel, dan Jaringan Bergerak',
        ]);
        Sarana::create([
            'nama' => 'Lab Sistem Informasi',
            'foto' => 'sisteminformasi.jpg',
            'deskripsi' => 'Pada laboratoium ini digunakan untuk melayani praktikum Prodi D3 Manajemen Informatika untuk mata kuliah Sistem Informasi, Pemrograman Basis Data, Sistem Basis Data, Perancangan Sistem Informasi, Manajemen Proyek Sistem Informasi, Aplikasi Manajemen Perkantoran; juga Prodi S1 Pendidikan Teknik Informatika untuk mata kuliah Basisdata, Multimedia Kreatif, Teknik Audio Visual, Elearning, Teknik Animasi',
        ]);
        Sarana::create([
            'nama' => 'Lab Multimedia Kreatif',
            'foto' => 'mmk.jpg',
            'deskripsi' => 'Pada laboratoium ini digunakan untuk melayani praktikum Prodi S1 Pendidikan Teknologi Informasi untuk mata kuliah Teknik Audio Visual, Elearning, Teknik Animasi',
        ]);
        Sarana::create([
            'nama' => 'Ruang Baca',
            'foto' => 'ruangbaca.jpg',
            'deskripsi' => 'Ruang baca Jurusan Teknik Informatika Universitas Negeri Surabaya terletak di gedung B1, Unesa Ketintang.',
        ]);
    }
}
