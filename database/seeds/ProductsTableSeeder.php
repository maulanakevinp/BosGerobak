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
            'spesifikasi'   =>  '<div class="table-responsive">
                                    <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                                        <tbody>
                                            <tr>
                                                <td>Bahan</td>
                                                <td>
                                                    <ul>
                                                        <li>- Multiplek 18mm , 12mm , 8mm</li>
                                                        <li>- Melamin</li>
                                                        <li>- Kayu Balok</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Gambar</td>
                                                <td>
                                                    <ul>
                                                        <li>- Stiker Rolland</li>
                                                        <li>- Banner</li>
                                                        <li>- Dll (Sesuai permintaan)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Variasi Tiang</td>
                                                <td>
                                                    <ul>
                                                        <li>- Stainless</li>
                                                        <li>- Besi</li>
                                                        <li>- Kayu</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Neon Box</td>
                                                <td>
                                                    <ul>
                                                        <li>- Plat</li>
                                                        <li>- Kayu Lapis</li>
                                                        <li>- Akrilik</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Finishing</td>
                                                <td>
                                                    <ul>
                                                        <li>- Cat Epoxy</li>
                                                        <li>- Cat Warna</li>
                                                        <li>- Clear (pelapis cat atau pelindung cat)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Roda</td>
                                                <td>
                                                    <ul>
                                                        <li>- Clear (Pelapis cat atau pelindung cat)</li>
                                                        <li>- Roda...</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>',
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
            'spesifikasi'   =>  '<div class="table-responsive">
                                    <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                                        <tbody>
                                            <tr>
                                                <td>Bahan</td>
                                                <td>
                                                    <ul>
                                                        <li>- Multiplek 18mm , 12mm , 8mm</li>
                                                        <li>- Melamin</li>
                                                        <li>- Kayu Balok</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Gambar</td>
                                                <td>
                                                    <ul>
                                                        <li>- Stiker Rolland</li>
                                                        <li>- Banner</li>
                                                        <li>- Dll (Sesuai permintaan)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Variasi Tiang</td>
                                                <td>
                                                    <ul>
                                                        <li>- Stainless</li>
                                                        <li>- Besi</li>
                                                        <li>- Kayu</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Neon Box</td>
                                                <td>
                                                    <ul>
                                                        <li>- Plat</li>
                                                        <li>- Kayu Lapis</li>
                                                        <li>- Akrilik</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Finishing</td>
                                                <td>
                                                    <ul>
                                                        <li>- Cat Epoxy</li>
                                                        <li>- Cat Warna</li>
                                                        <li>- Clear (pelapis cat atau pelindung cat)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Roda</td>
                                                <td>
                                                    <ul>
                                                        <li>- Clear (Pelapis cat atau pelindung cat)</li>
                                                        <li>- Roda...</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>',
            'harga'         =>  '1500000',
            'kategori_id'   =>  '3'
        ]);
        DB::table('products')->insert([
            'nama_produk'   =>  'GO-001',
            'spesifikasi'   =>  '<div class="table-responsive">
                                    <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                                        <tbody>
                                            <tr>
                                                <td>Bahan</td>
                                                <td>
                                                    <ul>
                                                        <li>- Hollow 4x4cm , 3x3cm, 2x2cm , 2x4cm</li>
                                                        <li>- Siku 4x4cm , 3x3cm , 2.5×2.5cm</li>
                                                        <li>- Plat Strip 3cm , 2cm , 1.5cm</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Gambar</td>
                                                <td>
                                                    <ul>
                                                        <li>- Stiker Rolland</li>
                                                        <li>- Banner</li>
                                                        <li>- Dll (Sesuai permintaan)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Dinding Gerobak</td>
                                                <td>
                                                    <ul>
                                                        <li>- Plat Galvanis</li>
                                                        <li>- Plat Eser</li>
                                                        <li>- Plat Alumunium, Dsb</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Neon Box</td>
                                                <td>
                                                    <ul>
                                                        <li>- Plat</li>
                                                        <li>- Kayu Lapis</li>
                                                        <li>- Akrilik</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Finishing</td>
                                                <td>
                                                    <ul>
                                                        <li>- Cat Epoxy</li>
                                                        <li>- Cat Warna</li>
                                                        <li>- Clear (Pelapis cat atau pelindung cat)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Roda</td>
                                                <td>
                                                    <ul>
                                                        <li>- Roda Motor + As ᴓ ± 3cm</li>
                                                        <li>- Roda Troli (Sesuai permintaan)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>',
            'harga'         =>  '1500000',
            'kategori_id'   =>  '4'
        ]);
    }
}
