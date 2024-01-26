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
        Schema::create('frequently_ask_part_ones', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('totalYear')->nullable();
            $table->string('titleOne')->nullable();
            $table->text('descriptionOne')->nullable();
            $table->string('titleTwo')->nullable();
            $table->text('descriptionTwo')->nullable();
            $table->string('titleThree')->nullable();
            $table->text('descriptionThree')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('frequently_ask_part_ones');
    }
};
