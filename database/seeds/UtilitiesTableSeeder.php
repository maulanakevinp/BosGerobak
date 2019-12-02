<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UtilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('utilities')->insert([
            'logo_perusahaan'       => 'logo.png',
            'judul_testimoni'       => 'Feedback from Customers',
            'deskripsi_testimoni'   => '<p>
                                            Pelanggan kami mencintai produk kami
                                        </p>',
            'judul_brands'          => 'Brands love to take Our Services',
            'deskripsi_brands'      => '<p>
                                            Kumpulan Brands yang sudah berlangganan disini
                                        </p>',
            'deskripsi_kategori'    => '<p>
                                            Kami memiliki beberapa kategori gerobak yang cocok untuk anda silahkan pilih kategori gerobak anda disini
                                        </p>',
            'link_facebook'         => 'https://facebook.com',
            'link_instagram'        => 'https://instagram.com',
            'link_twitter'          => 'https://twitter.com',
            'link_youtube'          => 'https://youtube.com',
        ]);
    }
}
