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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->json('country_id')->nullable();
            $table->json('division_id')->nullable();
            $table->json('city_id')->nullable();
            $table->json('area_id')->nullable();
            $table->foreignId('category_id')->nullable()->constrained('categories')->onDelete('set null');
            $table->string('name', 30)->unique();
            $table->string('slug', 40)->unique();
            $table->string('badge')->nullable();
            $table->string('logo', 150)->nullable();
            $table->string('image', 150)->nullable();
            $table->string('banner_image', 150)->nullable();
            $table->longText('about')->nullable();
            $table->longText('offer_description')->nullable();
            $table->longText('location')->nullable();
            $table->text('description')->nullable();
            $table->string('url', 255)->nullable();
            $table->string('category')->nullable();
            $table->string('status')->default('active')->comment('inactive,active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
