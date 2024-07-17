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
            $table->id();
            $table->integer('codigo');
            $table->integer('goles_fuera');
            $table->integer('goles_casa');
            $table->date('fecha');

            $table->unsignedBigInteger('gole_id')->nullable();

            $table->foreign('gole_id')
            ->references('id')
            ->on('goles')->onDelete('cascade');


            $table->timestamps();
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
