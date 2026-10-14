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
        Schema::create('pesananans', function (Blueprint $table) {
            $table->id();
            $table->layananid();
            $table->nama_pelanggan()(varchar(100));
            $table->tanggal_masuk(date_time());
            $table->jumlah()(decimal());
            $table->total_biaya()(decimal());
            $table->status()(int());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesananans');
    }
};
