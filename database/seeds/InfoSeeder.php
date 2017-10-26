<?php

use Illuminate\Database\Seeder;
use App\Info;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Info::create([
            'namainfo' => 'IT FEST',
            'foto' => 'itfest.jpg',
            'deskripsi' => 'X-PROJECT 3.0! 🙋
Himpunan Mahasiswa Teknik Informatika UNESA mempersembahkan
💥 IT FEST 💥

IT FEST merupakan lomba yang diadakan untuk menggali kemampuan dan kreativitas Mahasiswa/i seluruh Indonesia untuk bisa menciptakan suatu karya yang berupa project 💻
.
🎁 Hadiah
Trofi, Sertifikat Tingkat Nasional & Uang Tunai dengan Total Jutaan Rupiah!!
.
📅Waktu Pendaftaran
1 September 2017 - 31 Oktober 2017
.
📝Tempat Pendaftaran
📍Online: ic.xproject.id
📍Offline: Sekretariat HMJ Teknik Informatika, Gedung B1 Unesa Ketintang
.
💰 Biaya Pendaftaran
💸IT FEST: 120.000/tim
💸Kategori PES: 30.000/org
.
💳 for payment transfer to
00061-01-61-002020-2 (BTN)
a/n Nur Lujeng Kinanti
.
For Further Information,
visit xproject.id
.
☎ Fiqqi Zanuar Prakoso
IDLine : Fiqqizanuarprakoso
085784542948
☎ Rahma Melati S.
IDLine : RMSivana
085216957677',
        ]);

        Info::create([
            'namainfo' => 'Logic War',
            'foto' => 'logicwar.jpg',
            'deskripsi' => 'X-PROJECT 3.0! 🙋
Himpunan Mahasiswa Teknik Informatika UNESA mempersembahkan
💥 Logic War 💥

LOGIC WAR merupakan lomba yang diadakan untuk menggali 
kemampuan logika Matematika Siswa/i tingkat SMA/MA/K seluruh Indonesia untuk bisa berkompetisi 💻
.
🎁 Hadiah
Trofi, Sertifikat Tingkat Nasional & Uang Tunai dengan Total Jutaan Rupiah!!
.
📅Waktu Pendaftaran
1 September 2017 - 19 Oktober 2017
.
📝Tempat Pendaftaran
📍Online: ic.xproject.id
📍Offline: Sekretariat HMJ Teknik Informatika, Gedung B1 Unesa Ketintang
.
💰 Biaya Pendaftaran
💸Logic War: 50.000/orang 💰 for payment transfer to
00061-01-61-002020-2 (BTN)
a/n Nur Lujeng Kinanti

For Further Information,
visit xproject.id',
        ]);

        Info::create([
            'namainfo' => 'Wallpaper Design Competition',
            'foto' => 'wdc.jpg',
            'deskripsi' => 'X-PROJECT 3.0! 🙋
Himpunan Mahasiswa Teknik Informatika UNESA mempersembahkan
💥 WDC 💥

Wallpaper Design Competition merupakan 
sebuah lomba karya cipta dalam bentuk visualisasi 2D 
yang mengandung unsur kreativitas, inovasi dan pemanfaatan
yang dikembangkan untuk kepentingan yang luas (baik secara sosial, ekonomi, maupun budaya) 🎁 Hadiah
Trofi, Sertifikat & Uang Tunai dengan Total Jutaan Rupiah!!
.
📅Waktu Pendaftaran
6 September 2017 - 25 Oktober 2017
.
📝Tempat Pendaftaran
📍Online: ci.xproject.id
📍Offline: Sekretariat HMJ Teknik Informatika, Gedung B1 Unesa Ketintang
.
💰 Biaya Pendaftaran
💸WDC: 50.000/tim 💳 for payment transfer to
00061-01-61-002020-2 (BTN)
a/n Nur Lujeng Kinanti

For Further Information,
visit xproject.id',
        ]);

        Info::create([
            'namainfo' => 'Informatics Futsal Championship',
            'foto' => 'ifc.jpg',
            'deskripsi' => 'X-PROJECT 3.0! 🙋
Himpunan Mahasiswa Teknik Informatika UNESA mempersembahkan
💥 IFC 💥

Informatics Futsal Championship merupakan kompetisi futsal guna 
untuk mengembangkan bakat dan minat 
di bidang futsal dari siswa 
SMA/SMK sederajat
.
🎁 Hadiah
Trofi & Uang Tunai dengan Total Jutaan Rupiah!!
.
📅Waktu Pendaftaran
15 September 2017 - 15 Oktober 2017
.
📝Tempat Pendaftaran
📍Offline: Sekretariat HMJ Teknik Informatika, Gedung B1 Unesa Ketintang
.
💰 Biaya Pendaftaran
💸IFC: 300.000/tim 💰 for payment transfer to
00061-01-61-002020-2 (BTN)
a/n Nur Lujeng Kinanti

For Further Information,
visit xproject.id',
        ]);

        Info::create([
            'namainfo' => 'Informatics Photography Competition',
            'foto' => 'ipc.jpg',
            'deskripsi' => 'X-PROJECT 3.0! 🙋
Himpunan Mahasiswa Teknik Informatika UNESA mempersembahkan
💥 IPC 💥

Informatics Photography Competition 
merupakan sebuah kompetisi bidang fotografi 
yang dapat diikuti oleh seluruh masyarakat umum. 
Pengambilan gambar dapat dilakukan 
dengan kamera apapun. 🎁 Hadiah
Trofi, Sertifikat & Uang Tunai dengan Total Jutaan Rupiah!!
.
📅Waktu Pendaftaran
6 September 2017 - 25 Oktober 2017
.
📝Tempat Pendaftaran
📍Online: ci.xproject.id
📍Offline: Sekretariat HMJ Teknik Informatika, Gedung B1 Unesa Ketintang
.
💰 Biaya Pendaftaran
💸IPC: 35.000/org 💳for payment transfer to
00061-01-61-002020-2 (BTN)
a/n Nur Lujeng Kinanti

For Further Information,
visit xproject.id',
        ]);
    }
}
