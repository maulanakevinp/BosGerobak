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
            'deskripsi'     => 'PRAKTIS dan MUDAH DIPINDAHKAN, adalah 2 keunggulan yang bisa Anda dapatkan dari Gerobak Lipat. Gerobak jenis ini akan sangat sesuai untuk Anda yang memiliki lapak jualan berpindah-pindah. Dengan harga sangat terjangkau, Anda bisa mendapatkan sebuah outlet minimalis dengan fungsi yang sama dengan gerobak jenis lainnya. Dengan Gerobak Lipat Anda bisa berjualan nyaman dimana saja!',
            'keunggulan'    => '',
            'manfaat'       => '',
        ]);
        DB::table('categories')->insert([
            'nama_kategori' => 'Gerobak Kayu',
            'foto'          => 'gerobak-kayu.jpg',
            'deskripsi'     => 'UNIK-MENARIK. Berikan sentuhan unik dan nyentrik pada outlet jualan Anda dengan gerobak yang sedang HIT saat ini! Lebih mahal dari gerobak lipat namun lebih murah dari Gerobak jenis Indoor, Gerobak kayu bisa menjadi pilihan terbaik bagi Anda yang ingin mendatangkan lebih banyak pembeli ke lapak jualan Anda.',
            'keunggulan'    => '',
            'manfaat'       => '',
        ]);
        DB::table('categories')->insert([
            'nama_kategori' => 'Gerobak Indoor',
            'foto'          => 'gerobak-indoor.jpg',
            'deskripsi'     => 'Jadi, siapa saja yang membutuhkan gerobak indoor?',
            'keunggulan'    => '',
            'manfaat'       => '',
        ]);
        DB::table('categories')->insert([
            'nama_kategori' => 'Gerobak Outdoor',
            'foto'          => 'gerobak-outdoor.jpg',
            'deskripsi'     => 'PASTI AWET! Siapakah yang membutuhkan gerobak outdoor?',
            'keunggulan'    => '',
            'manfaat'       => '',
        ]);
    }
}
