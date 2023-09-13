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
        Schema::create('company_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('organization_type');
            $table->string('address');
            $table->date('foundation_year');
            $table->string('website_url')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('facebook_link')->nullable();
            $table->integer('annual_budget');
            $table->integer('centers_count');
            $table->longText('centers_address');
            $table->integer('employees_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_requests');
    }
};
