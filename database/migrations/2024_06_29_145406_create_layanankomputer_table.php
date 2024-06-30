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
        Schema::create('layanankomputer', function (Blueprint $table) {
            $table->id();
            $table->string('type'); // Menyimpan jenis section seperti 'cctv-text', 'cctv-package'
            $table->string('title')->nullable(); // Judul section atau card
            $table->text('description')->nullable(); // Deskripsi section atau card
            $table->string('image')->nullable(); // Gambar section atau card
            $table->decimal('price', 10, 2)->nullable(); // Harga paket jika diperlukan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanankomputer');
    }
};
