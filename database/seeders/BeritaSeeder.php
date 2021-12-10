<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
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
                'id' => 3,
                'id_categori' => '6',
                'judul' => 'Berita Hiburan Pertama',
                'slug' => 'berita_hiburan_pertama',
                'isi' => '<div>\r\n<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, consectetur eos aut laboriosam id temporibus iure ullam aliquam culpa, distinctio eaque minus, tempora reiciendis. Iste earum sed veniam perspiciatis itaque voluptates at, qui, id quae reiciendis beatae ipsum dignissimos totam, magnam eius error in temporibus pariatur. Voluptas dignissimos veniam atque.</div>\r\n<div>\r\n<div>\r\n<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, consectetur eos aut laboriosam id temporibus iure ullam aliquam culpa, distinctio eaque minus, tempora reiciendis. Iste earum sed veniam perspiciatis itaque voluptates at, qui, id quae reiciendis beatae ipsum dignissimos totam, magnam eius error in temporibus pariatur. Voluptas dignissimos veniam atque.</div>\r\n<div>&nbsp;</div>\r\n<div>\r\n<div>\r\n<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, consectetur eos aut laboriosam id temporibus iure ullam aliquam culpa, distinctio eaque minus, tempora reiciendis. Iste earum sed veniam perspiciatis itaque voluptates at, qui, id quae reiciendis beatae ipsum dignissimos totam, magnam eius error in temporibus pariatur. Voluptas dignissimos veniam atque. edit</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>',
                'view' => 5,
                'foto' => 'berita/berita_hiburan_pertama.jpg',
                'created_at' =>  '2021-12-04 13:55:13',
                'updated_at' =>  '2021-12-04 19:00:20',
            ],
            [
                'id' => 4,
                'id_categori' => '6',
                'judul' => 'Berita Hiburan Kedua',
                'slug' => 'berita_hiburan_kedua',
                'isi' => '<div>\r\n<div>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui at ad sit itaque, tenetur veritatis soluta expedita quod consequatur labore mollitia, veniam laudantium vitae voluptatem voluptas odit illo? Corrupti ut alias quos ratione magni cupiditate dolor accusamus perferendis inventore ducimus eveniet voluptatem, et, ullam molestias illum nisi odit porro sint!</div>\r\n<div>&nbsp;</div>\r\n<div>\r\n<div>\r\n<div>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui at ad sit itaque, tenetur veritatis soluta expedita quod consequatur labore mollitia, veniam laudantium vitae voluptatem voluptas odit illo? Corrupti ut alias quos ratione magni cupiditate dolor accusamus perferendis inventore ducimus eveniet voluptatem, et, ullam molestias illum nisi odit porro sint!</div>\r\n<div>\r\n<div>\r\n<div>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui at ad sit itaque, tenetur veritatis soluta expedita quod consequatur labore mollitia, veniam laudantium vitae voluptatem voluptas odit illo? Corrupti ut alias quos ratione magni cupiditate dolor accusamus perferendis inventore ducimus eveniet voluptatem, et, ullam molestias illum nisi odit porro sint!</div>\r\n<div>&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>',
                'view' => 5,
                'foto' => 'public/berita/berita_hiburan_kedua.jpg',
                'created_at' =>  '2021-12-04 14:06:23',
                'updated_at' =>  '2021-12-04 18:55:55',
            ],
            [
                'id' => 5,
                'id_categori' => '5',
                'judul' => 'Busana yang Berkelanjutan Jadi Fokus Baru Fast Retailing',
                'slug' => 'busana_yang_berkelanjutan_jadi_fokus_baru_fast_retailing',
                'isi' => '<p>Rencana ini akan diwujudkan dengan membuat pakaian sehari-hari yang tidak hanya menekankan pada kualitas, desain, dan harga, tetapi juga memenuhi definisi \"pakaian yang baik\" dari sudut pandang lingkungan, orang, dan masyarakat. Hal itu ditegaskan oleh direksi Fast Retailing dalam konferensi pers yang dilakukan secara virtual, Kamis 2 Desember 2021. Grup Senior Executive Officer Fast Retailing, Koji Yanai mengatakan, dalam strategi untuk menciptakan pakaian yang baik bagi lingkungan ini, seluruh proses, mulai dari produksi, distribusi, sampai penjualan, akan berwawasan lingkungan dan mengurangi emisi gas rumah kaca serta limbah. \"Menciptakan pakaian yang disukai konsumen sudah menjadi tujuan bisnis kami selama ini. Dengan adanya masalah lingkungan dan isu global lainnya, kami akan memperluas filosofi kami dan berkontribusi dalam isu keberlanjutan,\" katanya.<br /><br />Selain mengurangi dampak pada lingkungan yang ringan, secara bersamaan perusahaan juga akan melindungi hak asasi manusia dalam semua proses, serta membangun rantai pasokan sehingga para pelanggan dapat membeli produk dengan kepercayaan.</p>',
                'view' => 0,
                'foto' => 'berita/busana_yang_berkelanjutan_jadi_fokus_baru_fast_retailing.jpg',
                'created_at' =>  '2021-12-04 14:07:00',
                'updated_at' =>  '2021-12-06 02:46:26',
            ],
            [
                'id' => 6,
                'id_categori' => '6',
                'judul' => 'Kereta Api Vs Angkot di Medan, 4 Tewas, 6 Terluka',
                'slug' => 'kereta_api_vs_angkot_di_medan,_4_tewas,_6_terluka',
                'isi' => '<div>Sebuah kereta api terlibat kecelakaan lalu lintas dengan angkutan kota (angkot) di Medan, Sumatera Utara, Sabtu (4/12).&nbsp;<br />Kereta api itu menabrak Angkot Nomor 123 di perlintasan KA di Jalan Sekip Kota Medan.&nbsp; Akibat kecelakaan itu, empat orang meninggal dunia, dan enam mengalami luka-luka.&nbsp;</div>\r\n<div>&ldquo;Jumlah korban 10 orang. Empat orang meninggal dunia, dan enam orang mengalami luka-luka,\" kata Kasubbid Penmas Polda Sumut Kompol Muridan di Medan, Minggu (5/12).</div>\r\n<div>Muridan menjelaskan empat penumpang yang meninggal dunia itu, yakni Asma Nur (42), perempuan.&nbsp; Asma beralamat di Karya Lingkungan II Gang Karang Anyar, Kecamatan Medan Barat.&nbsp;Jenazah sudah dijemput keluarga. Kemudian, Batara Arengga Nasution (38), laki-laki, alamat Jalan Rusunawa Kayu Putih, Kecamatan Medan Deli. Jenazah sudah dijemput keluarga.&nbsp;<br /><br /></div>',
                'view' => 0,
                'foto' => 'berita/kereta_api_vs_angkot_di_medan,_4_tewas,_6_terluka.jpg',
                'created_at' =>  '2021-12-04 14:07:37',
                'updated_at' =>  '2021-12-06 01:11:34',
            ],
            [
                'id' => 7,
                'id_categori' => '8',
                'judul' => 'Facebook Protect Tiba di Indonesia, Wajib Dipakai atau Akun Diblokir setelah 15 Hari',
                'slug' => 'facebook_protect_tiba_di_indonesia,_wajib_dipakai_atau_akun_diblokir_setelah_15_hari',
                'isi' => '<p>Facebook meluncurkan fitur keamanan khusus tambahan untuk akun-akun Facebook tertentu di Indonesia, yaitu Facebook Protect. Pengguna yang mendapatkan notifikasi Facebook Protect wajib mengaktifkan fitur ini, bila tidak mereka akan terkunci dari akun Facebook miliknya sendiri. Dalam sebuah unggahan di Newsroom Meta, Kepala Kebijakan Keamanan Facebook Nathaniel Gleicher menjelaskan, Facebook Protect adalah sebuah program yang dirancang untuk orang-orang yang kemungkinan besar menjadi target sasaran peretasan hacker. Adapun orang-orang yang dimaksud seperti penggiat hak asasi manusia, jurnalis, dan pejabat pemerintah. Ketika sudah diaktifkan, Facebook Protect membantu pengguna tersebut untuk menerapkan perlindungan keamanan yang lebih kuat pada akunnya. Mulai dari penggunaan otentikasi dua langkah (two-factor authentication/TFA) dan memantau potensi ancaman peretasan. Karena ini merupakan fitur keamanan khusus untuk akun-akun tertentu, pengguna hanya bisa mengaktifkannya bila sudah mendapatkan prompt \"Facebook Protect\" di akunnya.</p>',
                'view' => 12,
                'foto' => 'berita/facebook_protect_tiba_di_indonesia,_wajib_dipakai_atau_akun_diblokir_setelah_15_hari.png',
                'created_at' =>  '2021-12-04 14:08:15',
                'updated_at' =>  '2021-12-06 02:01:18',
            ],
            [
                'id' => 8,
                'id_categori' => '7',
                'judul' => 'Lionel Messi Raih Lebih dari 30 Gelar dan 6 Ballon d\'Or',
                'slug' => 'lionel_messi_raih_lebih_dari_30_gelar_dan_6_ballon_d\'or',
                'isi' => '<div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; Messi sendiri menjadi top skor di kompetisi tertinggi Spanyol itu pada musim lalu dengan 30 gol, unggul tujuh gol dari Gerard Moreno dari Villarreal dan Karim Benzema dari Real Madrid yang berada di bawahnya.Messi menyabet 10 gelar La Liga, tujuh trofi Copa del Rey, juara Supercopa de Espana. Dia juga memenangkan Liga Champions empat kali, Piala Super Eropa tiga kali, dan Piala Dunia Antarklub tiga kali.&nbsp;Barcelona tidak akan diperkuat Lionel Messi mulai musim baru 2021/22. Meski tim Catalan itu ingin mempertahankan La Pulga, pada akhirnya mereka gagal menyelesaikan kontrak barunya.</div>\r\n</div>',
                'view' => 22,
                'foto' => 'berita/lionel_messi_raih_lebih_dari_30_gelar_dan_6_ballon_d\'or.jpg',
                'created_at' =>  '2021-12-04 16:32:31',
                'updated_at' =>  '2021-12-06 21:39:17',
            ],
        ];
        Berita::insert($data);
    }
}
