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
    Schema::create('contacts', function (Blueprint $table) {
        $table->id();
        $table->string('name');       // Kolom untuk menyimpan nama kontak
        $table->string('company');    // Kolom untuk menyimpan nama perusahaan
        $table->string('email');      // Kolom untuk menyimpan alamat email kontak
        $table->string('phone');      // Kolom untuk menyimpan nomor telepon kontak
        $table->timestamps();         // Kolom default untuk mencatat waktu pembuatan dan pembaruan
    });
}

/**
 * Reverse the migrations.
 */
public function down(): void
{
    Schema::dropIfExists('contacts');
}

};
