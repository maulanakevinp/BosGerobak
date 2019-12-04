<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'alamat'            => 'Jakarta',
            'nomor_telepon'     => '082123609561',
            'nomor_whatsapp'    => '082123609561',
            'email'             => 'admin@bosgerobak.com',
        ]);
    }
}
