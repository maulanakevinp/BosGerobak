<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'nama_produk' => 'Gerobak dalam ruangan',
            'spesifikasi' => 'Gerobak dalam ruangan'
        ]);
    }
}
