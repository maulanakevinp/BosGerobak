<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            'judul'     => 'CARI GEROBAK?',
            'deskripsi' => 'Disini Tempatnya kini Anda bisa mendatangkan lebih banyak pelanggan dengan Gerobak Keren dari bosgerobak.com',
            'foto'      => 'slider1.png',
        ]);
    }
}
