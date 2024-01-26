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
        Schema::create('home_page_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('frontImage')->nullable();
            $table->string('backImage')->nullable();
            $table->string('title')->nullable();
            $table->text('sliderList')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_page_contacts');
    }
};
