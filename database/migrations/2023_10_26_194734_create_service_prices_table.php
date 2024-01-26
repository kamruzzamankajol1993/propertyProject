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
        Schema::create('service_prices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('serviceDetailId')->unsigned();
            $table->foreign('serviceDetailId')->references('id')->on('service_details')->onDelete('cascade');
            $table->string('serviceTitle')->nullable();
            $table->string('servicePrice')->nullable();
            $table->text('serviceFeature')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_prices');
    }
};
