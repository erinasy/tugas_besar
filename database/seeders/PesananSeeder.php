<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanan = [
            [
                'pelanggan_id'=>1, 
                'produk_id'=>6, 
                'tgl_pesan'=>'2021-11-03', 
                'tgl_pengiriman'=>'2021-11-10',
                'total'=>'Rp.100.000'
            ],
        ];
        DB::table('pesanan')->insert($pesanan); 
    }
}
