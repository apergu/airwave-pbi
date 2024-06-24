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
        Schema::create('procurement_purchase_contract_detail', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('document_number')->nullable();
            $table->string('name')->nullable();
            $table->string('item')->nullable();
            $table->string('item_code')->nullable();
            $table->string('units')->nullable();
            $table->string('description')->nullable();
            $table->string('sum_of_item_rate')->nullable();
            $table->string('tax_item')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('status')->nullable();
            $table->string('date_created')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('procurement_purchase_contract_detail');
    }
};
