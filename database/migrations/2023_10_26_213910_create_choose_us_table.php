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
        Schema::create('choose_us', function (Blueprint $table) {
            $table->id();
            $table->string('imageOne')->nullable();
            $table->string('imageTwo')->nullable();
            $table->string('titleOne')->nullable();
            $table->string('titleTwo')->nullable();
            $table->string('titleThree')->nullable();
            $table->string('iconNameOne')->nullable();
            $table->string('iconNameTwo')->nullable();
            $table->text('iconNameThree')->nullable();
            $table->string('iconTitleOne')->nullable();
            $table->string('iconTitleTwo')->nullable();
            $table->string('iconTitleThree')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('choose_us');
    }
};
