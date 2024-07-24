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
        Schema::create('proyecto_colaboradore', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('proyecto_id')->nullable();
            $table->unsignedBigInteger('colaboradore_id')->nullable();
           

            $table->foreign('proyecto_id')
            ->references('id')
            ->on('proyectos')->onDelete('cascade');


            $table->foreign('colaboradore_id')
            ->references('id')
            ->on('colaboradores')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyecto_colaboradore');
    }
};
