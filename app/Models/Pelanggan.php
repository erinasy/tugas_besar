<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    //use HasFactory;
    protected $fillable = ['username', 'name', 'jenis_kelamin','alamat_pelanggan','nomor_telepon','email','password'];

    public function produks()
    {
        return $this->hasMany(Produk::class);
    }
}
