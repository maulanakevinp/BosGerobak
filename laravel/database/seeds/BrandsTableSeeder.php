<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'foto' => '1.png',
        ]);
        DB::table('brands')->insert([
            'foto' => '02.png',
        ]);
        DB::table('brands')->insert([
            'foto' => '03.png',
        ]);
        DB::table('brands')->insert([
            'foto' => '04.png',
        ]);
        DB::table('brands')->insert([
            'foto' => '05.png',
        ]);
        DB::table('brands')->insert([
            'foto' => '06.png',
        ]);
        DB::table('brands')->insert([
            'foto' => '7.png',
        ]);
        DB::table('brands')->insert([
            'foto' => '8.png',
        ]);
        DB::table('brands')->insert([
            'foto' => '9.png',
        ]);
        DB::table('brands')->insert([
            'foto' => '10.png',
        ]);
        DB::table('brands')->insert([
            'foto' => '11.png',
        ]);
        DB::table('brands')->insert([
            'foto' => '12.png',
        ]);
    }
}
