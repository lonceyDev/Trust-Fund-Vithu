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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique(); 
            
            $table->string('title'); 
            $table->longText('content'); 
            $table->string('featured_image')->nullable();
            $table->longText('gallery')->nullable(); 
            $table->dateTime('published_at')->nullable();
            $table->text('meta_description')->nullable(); 
            $table->unsignedBigInteger('views')->default(0);
            $table->unsignedBigInteger('likes')->default(0); 
            $table->unsignedBigInteger('shares')->default(0);
            $table->string('external_url')->nullable(); 
            $table->boolean('is_active')->default(0);
            $table->timestamps();

          
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
