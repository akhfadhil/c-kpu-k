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
        Schema::create('tps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_desa')->constrained('desas')->onDelete('cascade');
            $table->string('kode', 50)->unique(); // kode TPS, misalnya "TPS-001"
            $table->string('lokasi_deskripsi', 255)->nullable(); // alamat/lokasi TPS
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tps');
    }
};
