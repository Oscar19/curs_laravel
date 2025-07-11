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
        Schema::create('partidos', function (Blueprint $table) {
            $table->id('partido_id');
            $table->dateTime('fecha');
            $table->unsignedBigInteger('equipo_local_id')->nullable();
            $table->unsignedBigInteger('equipo_visitante_id')->nullable();
            $table->integer('resultado_local')->nullable();
            $table->integer('resultado_visitante')->nullable();
            $table->timestamps();

            $table->foreign('equipo_local_id')->references('equipo_id')->on('equipos')->onDelete('cascade');
            $table->foreign('equipo_visitante_id')->references('equipo_id')->on('equipos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partidos');
    }
};
