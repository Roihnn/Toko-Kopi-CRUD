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
        $table->string('nama');
        $table->enum('kategori', ['makanan', 'minuman', 'cemilan']);
        $table->integer('stok');
        $table->integer('harga');
        $table->timestamps(); // created_at & updated_at otomatis
    });
}


};
