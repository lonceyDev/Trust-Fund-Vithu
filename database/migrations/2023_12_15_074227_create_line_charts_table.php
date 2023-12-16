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
        Schema::create('line_charts', function (Blueprint $table) {
            $table->id();
            $table->string("name", 120);
            $table->integer("term1_marks");
            $table->integer("term2_marks");
            $table->integer("term3_marks");
            $table->integer("term4_marks");
            $table->text("remarks");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('line_charts');
    }
};
