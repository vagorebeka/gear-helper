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
        Schema::create('character_classes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('stat1');
            $table->foreign('stat1')->references('id')->on('statistics')->onDelete('cascade');
            $table->string('stat2');
            $table->foreign('stat2')->references('id')->on('statistics')->onDelete('cascade');
            $table->string('stat3');
            $table->foreign('stat3')->references('id')->on('statistics')->onDelete('cascade');
            $table->string('stat4');
            $table->foreign('stat4')->references('id')->on('statistics')->onDelete('cascade');
            $table->string('stat5');
            $table->foreign('stat5')->references('id')->on('statistics')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('character_classes');
    }
};
