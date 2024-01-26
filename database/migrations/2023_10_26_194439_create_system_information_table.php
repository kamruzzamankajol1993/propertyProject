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
        Schema::create('system_information', function (Blueprint $table) {
            $table->id();
            $table->string('siteName')->nullable();
            $table->string('siteEmail')->nullable();
            $table->string('sitePhone')->nullable();
            $table->text('siteAddress')->nullable();
            $table->string('adminSiteLogo')->nullable();
            $table->string('siteLogo')->nullable();
            $table->string('siteIcon')->nullable();
            $table->text('siteAbout')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_information');
    }
};
