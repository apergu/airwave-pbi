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
        Schema::create('project_id', function (Blueprint $table) {
            $table->id();
            $table->string('id')->nullable();
            $table->string('name')->nullable();
            $table->string('customer')->nullable();
            $table->string('status')->nullable();
            $table->string('percent_complete')->nullable();
            $table->string('start_date')->nullable();
            $table->string('calculated_end_date')->nullable();
            $table->string('actual_work')->nullable();
            $table->string('actual_end_date')->nullable();
            $table->string('projected_end_date')->nullable();
            $table->string('date_created')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_id');
    }
};
