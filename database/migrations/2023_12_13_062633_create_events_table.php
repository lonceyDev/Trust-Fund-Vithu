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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
           $table->string('slug')->unique();
            $table->string('title');
            $table->longText('description');
            $table->string('location');
            $table->string('featured_image')->nullable();
            $table->longText('gallery')->nullable();
            $table->date('events_at');
            $table->string('status')->default('upcoming');
            $table->json('extra')->nullable();
            $table->boolean('is_active')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
