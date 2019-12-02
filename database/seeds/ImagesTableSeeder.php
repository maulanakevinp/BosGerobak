<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'produk_id' => '1',
            'foto'      => '1.png',
        ]);
        DB::table('images')->insert([
            'produk_id' => '2',
            'foto'      => '2.png',
        ]);
        DB::table('images')->insert([
            'produk_id' => '3',
            'foto'      => '3.png',
        ]);
        DB::table('images')->insert([
            'produk_id' => '4',
            'foto'      => '4.png',
        ]);
    }
}
