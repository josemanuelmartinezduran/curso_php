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
        Schema::table('direccion', function (Blueprint $table) {
            $table->string('calle');
            $table->string('numero');
            $table->timestamps();
        });

        Schema::table('usuario', function (Blueprint $table) {
            $table->foreignId('direccion_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direccion');
    }
};
