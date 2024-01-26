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
        Schema::create('aboutuses', function (Blueprint $table) {
            $table->id();
            $table->string('totalExperience')->nullable();
            $table->string('imageOne')->nullable();
            $table->string('imageTwo')->nullable();
            $table->string('mainTitle')->nullable();
            $table->text('shortDescription')->nullable();
            $table->string('iconOne')->nullable();
            $table->string('titleOne')->nullable();
            $table->text('descriptionOne')->nullable();
            $table->string('iconTwo')->nullable();
            $table->string('titleTwo')->nullable();
            $table->text('descriptionTwo')->nullable();
            $table->string('ceoImage')->nullable();
            $table->string('ceoName')->nullable();
            $table->string('ceoDesignation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aboutuses');
    }
};
