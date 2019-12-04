<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'foto' => 'testimoni1.jpg'
        ]);
        DB::table('testimonials')->insert([
            'foto' => 'testimoni2.jpg'
        ]);
        DB::table('testimonials')->insert([
            'foto' => 'testimoni3.jpg'
        ]);
        DB::table('testimonials')->insert([
            'foto' => 'testimoni4.jpg'
        ]);
    }
}
