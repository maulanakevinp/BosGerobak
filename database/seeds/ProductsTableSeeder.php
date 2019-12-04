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
            'spesifikasi'   =>  '<ul class="unordered-list" style="font-size: small">
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
                                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                                        <h4 class="font-weight-bold">Bahan</h4>
                                        <ul class="unordered-list" style="font-size: small">
                                            <li>Multiplek 18mm , 12mm , 8mm</li>
                                            <li>Melamin</li>
                                            <li>Kayu Balok</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                                        <h4 class="font-weight-bold">Finishing</h4>
                                        <ul class="unordered-list" style="font-size: small">
                                            <li>Cat Epoxy</li>
                                            <li>Cat Warna</li>
                                            <li>Clear (pelapis cat atau pelindung cat)</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                                        <h4 class="font-weight-bold">Gambar</h4>
                                        <ul class="unordered-list" style="font-size: small">
                                            <li>Stiker Rolland</li>
                                            <li>Banner</li>
                                            <li>Dll (Sesuai permintaan)</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                                        <h4 class="font-weight-bold">Neon Box</h4>
                                        <ul class="unordered-list" style="font-size: small">
                                            <li>Plat</li>
                                            <li>Kayu Lapis</li>
                                            <li>Akrilik</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                                        <h4 class="font-weight-bold">Variasi Tiang</h4>
                                        <ul class="unordered-list" style="font-size: small">
                                            <li>Stainles</li>
                                            <li>Besi</li>
                                            <li>Kayu</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                                        <h4 class="font-weight-bold">Roda</h4>
                                        <ul class="unordered-list" style="font-size: small">
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
                                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                                        <h4 class="font-weight-bold">Bahan</h4>
                                        <ul class="unordered-list" style="font-size: small">
                                            <li>Hollow 4x4cm , 3x3cm, 2x2cm , 2x4cm</li>
                                            <li>Siku 4x4cm , 3x3cm , 2.5×2.5cm</li>
                                            <li>Plat Strip 3cm , 2cm , 1.5cm</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                                        <h4 class="font-weight-bold">Dinding Gerobak</h4>
                                        <ul class="unordered-list" style="font-size: small">
                                            <li>Plat Galvanis</li>
                                            <li>Plat Eser</li>
                                            <li>Plat Alumunium , Dsb.</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                                        <h4 class="font-weight-bold">Finishing</h4>
                                        <ul class="unordered-list" style="font-size: small">
                                            <li>Cat Epoxy</li>
                                            <li>Cat Warna</li>
                                            <li>Clear (Pelapis cat atau pelindung cat)</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                                        <h4 class="font-weight-bold">Gambar</h4>
                                        <ul class="unordered-list" style="font-size: small">
                                            <li>Stiker Rolland</li>
                                            <li>Banner</li>
                                            <li>Dll (Sesuai permintaan)</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                                        <h4 class="font-weight-bold">Neon Box</h4>
                                        <ul class="unordered-list" style="font-size: small">
                                            <li>Plat</li>
                                            <li>Kayu Lapis</li>
                                            <li>Akrilik</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                                        <h4 class="font-weight-bold">Roda</h4>
                                        <ul class="unordered-list" style="font-size: small">
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
