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
        Schema::create('testimonial_part_twos', function (Blueprint $table) {
            $table->id();
            $table->text('image')->nullable();
            $table->text('name')->nullable();
            $table->text('rate')->nullable();
            $table->text('designation')->nullable();
            $table->text('shortDescription')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonial_part_twos');
    }
};
