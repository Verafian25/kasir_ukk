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
        Schema::create('penjualan', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('kode_penjualan')->unique('penjualan_UN');
            $table->date('tanggal');
            $table->decimal('total_harga', 10);
            $table->integer('user_id')->nullable();
            $table->integer('pelanggan_id')->nullable();
            $table->decimal('bayar', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualan');
    }
};
