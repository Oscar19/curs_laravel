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
        Schema::create('pla_vacacionals', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('lloc');
            $table->date('data');
            $table->enum('tipus', ['Restaurant', 'Esport', 'Cultural', 'Visita', 'Altres']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pla_vacacionals');
    }
};
