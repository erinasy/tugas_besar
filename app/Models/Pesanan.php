<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $fillable = ['pelanggan_id','produk_id', 'tgl_pesan', 'tgl_pengiriman','total'];
    public function produk()
	{
	      return $this->belongsTo('Produk','produk_id', 'id');
	}

	public function pelanggan()
	{
	      return $this->belongsTo('Pelanggan','pelanggan_id', 'id');
	}
}
