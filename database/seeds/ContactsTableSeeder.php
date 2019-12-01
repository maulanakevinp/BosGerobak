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
            'nomor_telepon'     => '087752465180',
            'nomor_whatsapp'    => '087752465180',
            'email'             => 'admin@bosgerobak.com',
        ]);
    }
}
