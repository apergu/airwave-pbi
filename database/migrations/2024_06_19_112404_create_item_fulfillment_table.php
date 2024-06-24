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
        Schema::create('item_fulfillment', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('document_number')->nullable();
            $table->string('material_request_ref')->nullable();
            $table->string('sales_budget_ref')->nullable();
            $table->string('item')->nullable();
            $table->string('item_code')->nullable();
            $table->string('category')->nullable();
            $table->string('qty')->nullable();
            $table->string('units')->nullable();
            $table->string('status')->nullable();
            $table->string('project_id')->nullable();
            $table->string('activity_code')->nullable();
            $table->string('date_created')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_fulfillment');
    }
};
