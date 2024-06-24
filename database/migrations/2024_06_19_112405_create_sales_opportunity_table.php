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
        Schema::create('sales_opportunity', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('document_number')->nullable();
            $table->string('customer')->nullable();
            $table->string('sales_rep')->nullable();
            $table->string('date')->nullable();
            $table->string('expected_close')->nullable();
            $table->string('opportunity_status')->nullable();
            $table->string('probability')->nullable();
            $table->string('forecast_type')->nullable();
            $table->string('projected_total')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_opportunity');
    }
};
