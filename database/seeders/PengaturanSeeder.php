<?php

namespace Database\Seeders;

use App\Models\Pengaturan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengaturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengaturan::create(
            [
                'nama_site' => 'Air Terjun Batu Mahasur',
                'tentang' => '<p>Air Terjun Batu Mahasur adalah sebuah air terjun yang berada di Desa Kuala Kurun, 
                        Kecamatan Kurun, Kabupaten Gunung Mas, Provinsi Kalimantan Tengah, Indonesia. 
                        Lokasinya yang sangat dekat dengan ibu kota kabupaten yakni hanya 1,5 Kilometer 
                        membuat Air Terjun Batu Mahasur menjadi wisata andalan Kabupaten Gunung Mas.</p>',
                'link_video' => 'https://www.youtube.com/watch?v=kj3N7AVxXtg'
            ]
        );
    }
}
