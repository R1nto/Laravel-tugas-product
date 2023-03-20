<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('idorderdetail');
            $table->integer('ib')->nullable();
            $table->integer('jumlah')->nullable();
            $table->float('harga')->nullable();
            $table->string('barang')->nullable();
            $table->integer('ip')->nullable();
            $table->string('pelanggan')->nullable();
            $table->string('alamat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
