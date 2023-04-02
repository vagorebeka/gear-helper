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
        Schema::create('items', function (Blueprint $table) {
            $table->string('name')->primary();
            $table->string('stat1', 3);
            $table->foreign('stat1')->references('abbr')->on('statistics')->onDelete('cascade');
            $table->integer('stat1amount');
            $table->string('stat2', 3);
            $table->foreign('stat2')->references('abbr')->on('statistics')->onDelete('cascade');
            $table->integer('stat2amount');
            $table->string('stat3', 3);
            $table->foreign('stat3')->references('abbr')->on('statistics')->onDelete('cascade');
            $table->integer('stat3amount');
            $table->string('slot');
            $table->integer('material');
            $table->foreign('material')->references('name')->on('materials')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
