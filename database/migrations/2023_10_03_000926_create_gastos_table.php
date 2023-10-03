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
        Schema::create('gastos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string ('detalle',255);
            $table->float('importe');
            $table->date('fecha')->nullable();
            $table->tinyInteger('fijo');

            $table->unsignedBigInteger('categorias_id')->nullable();
            $table->unsignedBigInteger('pagos_id')->nullable();
            $table->unsignedBigInteger('perfil_id')->nullable();


            $table->foreign('categorias_id')->references('id')->on('categorias')->onDelete('set null');
            $table->foreign('pagos_id')->references('id')->on('pagos')->onDelete('set null');
            $table->foreign('perfil_id')->references('id')->on('perfil')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gastos');
    }
};
