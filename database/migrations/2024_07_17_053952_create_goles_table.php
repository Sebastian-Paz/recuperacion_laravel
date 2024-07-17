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
        Schema::create('goles', function (Blueprint $table) {
            $table->id();
            $table->integer('minuto');
            $table->string('descripcion');
            $table->integer('codigo');

            $table->unsignedBigInteger('jugadore_id')->nullable();

            $table->foreign('jugadore_id')
            ->references('id')
            ->on('jugadores')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goles');
    }
};
