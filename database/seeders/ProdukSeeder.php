<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produks')->insert([
            'name'=>'Bouquet Money',
            'keterangan' => 'Boquet yang terdiri dari lembaran uang pecahan 100 dengan jumlah sesuai dengan permintaan pelanggan',
            'stok' => '25',
            'harga'  => 'Rp.-',
        ]);
        DB::table('produks')->insert([
            'name'=>'Bouquet Rose Pink ',
            'keterangan' => 'Boquet dengan bunga mawar asli berwarna pink ',
            'stok' => '50',
            'harga'  => 'Rp.450.0000',
        ]);
        DB::table('produks')->insert([
            'name'=>'Bouquet Red Rose  ',
            'keterangan' => 'Boquet dengan bunga mawar asli berwarna merah ',
            'stok' => '30',
            'harga'  => 'Rp.400.0000',
        ]);
        DB::table('produks')->insert([
            'name'=>'Bouquet Dry Flower ',
            'keterangan' => 'Boquet dengan bunga kering yang cantik ',
            'stok' => '60',
            'harga'  => 'Rp.150.0000',
        ]);
        
    }
}
