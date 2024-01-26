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
        Schema::create('portfolio_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('portfolioId')->unsigned();
            $table->foreign('portfolioId')->references('id')->on('portfolios')->onDelete('cascade');
            $table->string('date')->nullable();
            $table->string('clientName')->nullable();
            $table->string('webLink')->nullable();
            $table->string('location')->nullable();
            $table->text('descriptionOne')->nullable();
            $table->string('serviceImage')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolio_details');
    }
};
