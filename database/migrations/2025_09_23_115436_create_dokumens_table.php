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
        Schema::create('dokumens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_tps')->constrained('tps')->onDelete('cascade');
            $table->enum('jenis_dokumen', ['PPWP', 'DPRRI', 'DPD', 'DPRDP', 'DPRDK']);
            $table->string('file_path', 255); // path ke file dokumen
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumens');
    }
};
