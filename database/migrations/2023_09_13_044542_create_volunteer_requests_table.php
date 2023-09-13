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
        Schema::create('volunteer_requests', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->boolean('volunteered_before');
            $table->longText('volunteer_info')->nullable();
            $table->boolean('have_skills');
            $table->longText('skills_info')->nullable();
            $table->date('volunteer_beginning');
            $table->date('volunteer_ending');
            $table->longText('educational_experience');
            $table->string('cv');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volunteer_requests');
    }
};
