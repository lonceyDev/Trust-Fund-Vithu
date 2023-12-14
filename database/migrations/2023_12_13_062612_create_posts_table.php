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
            $table->string('slug')->unique()->nullable(); 
            $table->unsignedBigInteger('user_id');
            $table->string('title'); 
            $table->longText('content'); 
            $table->string('featured_image')->nullable(); 
            $table->dateTime('publish_at')->nullable(); 
            $table->boolean('published')->default(false); 
            $table->text('meta_description')->nullable(); 
            $table->unsignedBigInteger('views')->default(0);
            $table->unsignedBigInteger('likes')->default(0); 
            $table->unsignedBigInteger('shares')->default(0);
            $table->string('external_url')->nullable(); 
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
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