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
        Schema::create('Receipes', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->string('Description');
            $table->string('Image');
            $table->integer('Duree');
            $table->float('DegresAttendu');
            $table->float('SucreEmbouteillage');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receipes');
    }
};
