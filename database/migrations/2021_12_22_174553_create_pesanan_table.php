<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('pelanggan_id');
                $table->unsignedBigInteger('produk_id');
                $table->date('tgl_pesan');
                $table->date('tgl_pengiriman');
                $table->String('total');
                $table->timestamps();
                $table->foreign('pelanggan_id')->references('id')->on('pelanggans');
                $table->foreign('produk_id')->references('id')->on('produks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
}
