<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelanggans')->insert([
            'username'=>'Alfina123',
            'name'=>'Alfina Nur A',
            'jenis_kelamin' => 'Perempuan',
            'alamat_pelanggan' => 'Jln.Anggrek No.15',
            'nomor_telepon'  => '087536271823',
            'email'=>'alfina@gmail.com',
            'password'=>'alfina123',
        ]);
        DB::table('pelanggans')->insert([
            'username'=>'Erina456',
            'name'=>'Erina Seviyanti',
            'jenis_kelamin' => 'Perempuan',
            'alamat_pelanggan' => 'Jln.Rambutan No.15',
            'nomor_telepon'  => '086251728123',
            'email'=>'erina@gmail.com',
            'password'=>'erina456',
        ]);
    }
}
