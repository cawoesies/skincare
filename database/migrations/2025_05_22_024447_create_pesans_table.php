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
    Schema::create('pesan', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('email');
        $table->string('telepon');
        $table->text('alamat');
        $table->integer('jumlah');
        $table->integer('ongkir');
        $table->string('metode_pengiriman');
        $table->string('metode_pembayaran');
        $table->integer('total');
        $table->unsignedBigInteger('product_id');
        $table->timestamps();

        // Foreign key ke tabel products
        $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesans');
    }
};
