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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('time');
            $table->string('location_en');
            $table->string('location_ar');
            $table->string('title_en');
            $table->string('title_ar');
            $table->longText('description_en');
            $table->longText('description_ar');
            $table->longText('keywords_en');
            $table->longText('keywords_ar');
            $table->string('image');
            $table->enum('type', ['news', 'advertisment']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
