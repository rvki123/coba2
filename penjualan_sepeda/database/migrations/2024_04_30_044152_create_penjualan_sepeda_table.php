<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanSepedaTable extends Migration
{
    public function up()
    {
        Schema::create('penjualan_sepeda', function (Blueprint $table) {
            $table->bigIncrements('id');  // Auto-increment ID sebagai Primary Key
            $table->string('nama_pembeli');  // Nama pembeli sepeda
            $table->string('merk_sepeda');  // Merk sepeda yang dibeli
            $table->unsignedBigInteger('jumlah_sepeda');  // Jumlah sepeda yang dibeli
            $table->date('tanggal_pembelian');  // Tanggal pembelian sepeda
            $table->decimal('total_harga', 10, 2);  // Total harga pembelian
            $table->timestamps();  // Kolom created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('penjualan_sepeda');  
    }
}
