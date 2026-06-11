<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  public function up()
{
    Schema::create('surveys', function (Blueprint $table) {
        $table->id();
        $table->foreignId('pasien_id')->constrained('pasiens')->onDelete('cascade');
        $table->integer('nilai_pelayanan'); // 1-5
        $table->integer('nilai_dokter');    // 1-5
        $table->integer('nilai_fasilitas'); // 1-5
        $table->text('komentar')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surveys');
    }
};
