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
        Schema::create('sidang_ta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('periode_id');
            $table->date('tanggal');
            $table->string('lembar_revisi');
            $table->string('draft_ta');
            $table->string('bukti_plagiasi');
            $table->string('status')->default('on_process');
            $table->boolean('revisi_pembimbing_1')->default(false);
            $table->boolean('revisi_pembimbing_2')->default(false);
            $table->boolean('revisi_penguji_1')->default(false);
            $table->boolean('revisi_penguji_2')->default(false);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('periode_id')->references('id')->on('periodes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sidang_t_a_s');
    }
};