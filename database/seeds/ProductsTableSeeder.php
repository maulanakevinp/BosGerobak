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
            'nama_produk'   => 'Tipe A',
            'spesifikasi'   =>  '<ul class="unordered-list">
                                    <li>Badan Gerobak 120x60cm</li>
                                    <li>Stiker Gerobak</li>
                                    <li>Pintu Rak Gerobak</li>
                                    <li>Roda Gerobak</li>
                                    <li>Papan Menu</li>
                                </ul>',
            'harga'         =>  '150000',
            'kategori_id'   =>  '1'
        ]);
        DB::table('products')->insert([
            'nama_produk'   =>  'GK-001',
            'harga'         =>  '500000',
            'kategori_id'   =>  '2'
        ]);
        DB::table('products')->insert([
            'nama_produk'   =>  'GI-001',
            'spesifikasi'   =>  '<div class="row justify-content-center">
                                    <div class="col-lg-2 col-md-6 col-12">
                                        <h5>Bahan</h5>
                                        <ul class="unordered-list">
                                            <li>Multiplek 18mm , 12mm , 8mm</li>
                                            <li>Melamin</li>
                                            <li>Kayu Balok</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-12">
                                        <h5>Finishing</h5>
                                        <ul class="unordered-list">
                                            <li>Cat Epoxy</li>
                                            <li>Cat Warna</li>
                                            <li>Clear (pelapis cat atau pelindung cat)</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-12">
                                        <h5>Gambar</h5>
                                        <ul class="unordered-list">
                                            <li>Stiker Rolland</li>
                                            <li>Banner</li>
                                            <li>Dll (Sesuai permintaan)</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-12">
                                        <h5>Neon Box</h5>
                                        <ul class="unordered-list">
                                            <li>Plat</li>
                                            <li>Kayu Lapis</li>
                                            <li>Akrilik</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-12">
                                        <h5>Variasi Tiang</h5>
                                        <ul class="unordered-list">
                                            <li>Stainles</li>
                                            <li>Besi</li>
                                            <li>Kayu</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-12">
                                        <h5>Roda</h5>
                                        <ul class="unordered-list">
                                            <li>Roda 2"</li>
                                            <li>Roda 3"</li>
                                            <li>Roda 4" dst.</li>
                                        </ul>
                                    </div>
                                </div>',
            'harga'         =>  '1500000',
            'kategori_id'   =>  '3'
        ]);
        DB::table('products')->insert([
            'nama_produk'   =>  'GO-001',
            'spesifikasi'   =>  '<div class="row justify-content-center">
                                    <div class="col-lg-2 col-md-6 col-12">
                                        <h5>Bahan</h5>
                                        <ul class="unordered-list">
                                            <li>Hollow 4x4cm , 3x3cm, 2x2cm , 2x4cm</li>
                                            <li>Siku 4x4cm , 3x3cm , 2.5×2.5cm</li>
                                            <li>Plat Strip 3cm , 2cm , 1.5cm</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-12">
                                        <h5>Dinding Gerobak</h5>
                                        <ul class="unordered-list">
                                            <li>Plat Galvanis</li>
                                            <li>Plat Eser</li>
                                            <li>Plat Alumunium , Dsb.</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-12">
                                        <h5>Finishing</h5>
                                        <ul class="unordered-list">
                                            <li>Cat Epoxy</li>
                                            <li>Cat Warna</li>
                                            <li>Clear (Pelapis cat atau pelindung cat)</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-12">
                                        <h5>Gambar</h5>
                                        <ul class="unordered-list">
                                            <li>Stiker Rolland</li>
                                            <li>Banner</li>
                                            <li>Dll (Sesuai permintaan)</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-12">
                                        <h5>Neon Box</h5>
                                        <ul class="unordered-list">
                                            <li>Plat</li>
                                            <li>Kayu Lapis</li>
                                            <li>Akrilik</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-12">
                                        <h5>Roda</h5>
                                        <ul class="unordered-list">
                                            <li>Roda Motor + As ᴓ ± 3cm</li>
                                            <li>Roda Troli (Sesuai permintaan)</li>
                                        </ul>
                                    </div>
                                </div>',
            'harga'         =>  '1500000',
            'kategori_id'   =>  '4'
        ]);
    }
}
