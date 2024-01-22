<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // database/migrations/create_category_post_table.php

public function up()
{
    Schema::create('category_post', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('category_id');
        $table->unsignedBigInteger('post_id');
        $table->timestamps();

        $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_post');
    }
};
