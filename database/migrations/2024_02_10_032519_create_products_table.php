<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal');
            $table->string('nama_barang');
            $table->text('jumlah_barang');
            $table->text('harga_barang');
            $table->timestamps();
        });
    }
     
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};