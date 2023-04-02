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
            $table->string('name')->primary();
            $table->string('stat1', 3);
            $table->foreign('stat1')->references('abbr')->on('statistics')->onDelete('cascade');
            $table->string('stat2', 3);
            $table->foreign('stat2')->references('abbr')->on('statistics')->onDelete('cascade');
            $table->string('stat3', 3);
            $table->foreign('stat3')->references('abbr')->on('statistics')->onDelete('cascade');
            $table->string('stat4', 3);
            $table->foreign('stat4')->references('abbr')->on('statistics')->onDelete('cascade');
            $table->string('stat5', 3);
            $table->foreign('stat5')->references('abbr')->on('statistics')->onDelete('cascade');
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
