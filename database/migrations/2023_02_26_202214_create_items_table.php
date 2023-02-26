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
            $table->id();
            $table->string('name');
            $table->string('stat1');
            $table->foreign('stat1')->references('id')->on('statistics')->onDelete('cascade');
            $table->integer('stat1amount');
            $table->string('stat2');
            $table->foreign('stat2')->references('id')->on('statistics')->onDelete('cascade');
            $table->integer('stat2amount');
            $table->string('stat3');
            $table->foreign('stat3')->references('id')->on('statistics')->onDelete('cascade');
            $table->integer('stat3amount');
            $table->string('slot');
            $table->string('material_id');
            $table->foreign('material_id')->references('id')->on('materials')->onDelete('cascade');
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
