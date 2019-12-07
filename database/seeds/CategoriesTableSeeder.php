<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'nama_kategori' => 'Gerobak Lipat',
            'foto'          => 'gerobak-lipat.jpg',
            'deskripsi'     => '<p>PRAKTIS dan MUDAH DIPINDAHKAN, adalah 2 keunggulan yang bisa Anda dapatkan dari Gerobak Lipat. Gerobak jenis ini akan sangat sesuai untuk Anda yang memiliki lapak jualan berpindah-pindah.</p>',
            'keunggulan'    => '<ul>
                                    <li>Ringan</li>
                                    <li>Praktis</li>
                                    <li>Awet</li>
                                    <li>Mudah Direnovasi</li>
                                </ul>',
        ]);
        DB::table('categories')->insert([
            'nama_kategori' => 'Gerobak Kayu',
            'foto'          => 'gerobak-kayu.jpg',
            'deskripsi'     => '<p>UNIK-MENARIK. Berikan sentuhan unik dan nyentrik pada outlet jualan Anda dengan gerobak yang sedang HIT saat ini! Lebih mahal dari gerobak lipat namun lebih murah dari Gerobak jenis Indoor.</p>',
            'keunggulan'    => '<ul>
                                    <li>Lebih Kuat</li>
                                    <li>Lebih Menarik</li>
                                    <li>INDOOR juga OUTDOOR</li>
                                    <li>Model Beragam</li>
                                </ul>',
        ]);
        DB::table('categories')->insert([
            'nama_kategori' => 'Gerobak Indoor',
            'foto'          => 'gerobak-indoor.jpg',
            'deskripsi'     => '<p>Jadi, siapa saja yang membutuhkan gerobak indoor?</p>',
            'keunggulan'    => '<ul>
                                    <li>Model Lebih Beragam</li>
                                    <li>Variasi Finishing</li>
                                </ul>',
        ]);
        DB::table('categories')->insert([
            'nama_kategori' => 'Gerobak Outdoor',
            'foto'          => 'gerobak-outdoor.jpg',
            'deskripsi'     => '<p>PASTI AWET! Siapakah yang membutuhkan gerobak outdoor?</p>',
            'keunggulan'    => '<p>
                                    Murah, tak selalu yang terbaik. Ketika produk Anda adalah makanan yang menggunakan kompor, pemanggang, atau oven, untuk memasaknya, maka jenis Gerobak Outdoor adalah gerobak yang paling sesuai. Selain lebih aman, karena terbuat dari besi. Gerobak jenis outdoor dijamin lebih awet dibandingkan dengan jenis gerobak lainnya. <br>
                                    Gerobak outdoor juga bisa digunakan untuk berjualan di tempat terbuka. Meskipun terkena sinar matahari atau air hujan, gerobak jenis ini dipastikan lebih awet dan tahan lama. Jika suatu saat cat mulai memudar, maka Anda hanya perlu melakukan pengecatan ulang atau penggantian stiker branding yang bisa dilepas dan diganti dengan yang baru. <br>
                                    Untuk jenis gerobak ini, JuraganGerobak, Com juga memiliki beragam pilihan model dan pilihan harga yang bisa disesuaikan dengan dana usaha Anda.
                                </p>',
        ]);
    }
}
