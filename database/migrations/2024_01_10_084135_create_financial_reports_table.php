<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancialReportsTable extends Migration
{
    public function up()
    {
        Schema::create('financial_reports', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('project_id')->nullable();
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->date('report_at');
            $table->decimal('donations', 10, 2)->nullable();
            $table->decimal('grants', 10, 2)->nullable();
            $table->decimal('program_expenses', 10, 2);
            $table->decimal('administrative_expenses', 10, 2)->nullable();
            $table->decimal('fundraising_expenses', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('financial_reports');
    }
}
?>