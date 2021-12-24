<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    //use HasFactory;
    protected $fillable = ['name','keterangan', 'stok', 'harga'];
  
    public function pesanan_detail() 
	{
	     return $this->hasMany('PesananDetail','produk_id', 'id');
	}
}
