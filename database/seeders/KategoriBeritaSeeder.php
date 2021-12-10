<?php

namespace Database\Seeders;

use App\Models\KategoriBerita;
use Illuminate\Database\Seeder;

class KategoriBeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 5,
                'kategori_berita' => 'Fashion',
                'view' => 0,
                'created_at' => '2021-12-04 13:52:10',
                'updated_at' => '2021-12-04 13:52:10',
            ],
            [
                'id' => 6,
                'kategori_berita' => 'Trending',
                'view' => 0,
                'created_at' => '2021-12-04 13:54:26',
                'updated_at' => '2021-12-06 00:25:09',
            ],
            [
                'id' => 7,
                'kategori_berita' => 'Olahraga',
                'view' => 0,
                'created_at' => '2021-12-06 00:33:10',
                'updated_at' => '2021-12-06 00:33:10',
            ],
            [
                'id' => 8,
                'kategori_berita' => 'Teknologi',
                'view' => 0,
                'created_at' => '2021-12-06 01:15:31',
                'updated_at' => '2021-12-06 01:15:31',
            ],
        ];
        KategoriBerita::insert($data);
    }
}
