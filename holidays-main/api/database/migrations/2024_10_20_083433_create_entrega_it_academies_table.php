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
        Schema::create('entrega_it_academies', function (Blueprint $table) {
            $table->id();
            $table->string('nom_entrega');
            $table->string('sprint'); // Aquí puedes definir los diferentes sprints como opciones
            $table->date('data_entrega');
            $table->string('link_github');
            $table->text('comentaris')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entrega_it_academies');
    }
};
