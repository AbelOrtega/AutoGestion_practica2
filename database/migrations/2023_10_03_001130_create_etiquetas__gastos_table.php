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
        Schema::create('etiquetas__gastos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('gastos_id');
            $table->unsignedBigInteger('etiquetas_id');

            $table->foreign('gastos_id')->references('id')->on('gastos');
            $table->foreign('etiquetas_id')->references('id')->on('etiquetas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etiquetas__gastos');
    }
};
