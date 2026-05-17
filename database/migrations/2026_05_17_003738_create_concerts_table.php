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
        Schema::create('concerts', function (Blueprint $table) {
            $table->id();

            $table->string('artista');
            $table->string('tour');
            $table->string('venue');
            $table->string('ciudad');

            $table->date('fecha');

            $table->text('descripcion');

            $table->string('spotify_link')->nullable();

            $table->string('foto');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('concerts');
    }
};
