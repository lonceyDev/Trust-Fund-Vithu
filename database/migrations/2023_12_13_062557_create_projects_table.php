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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title');
            $table->longText('description');
            $table->string('featured_image')->nullable();
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->decimal('project_amount', 10, 2);
            $table->decimal('expected_amount', 10, 2)->nullable();
            $table->enum('status', ['pending', 'ongoing', 'completed'])->default('pending');
            $table->json('extra')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
