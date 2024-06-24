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
        Schema::create('invoice_sales_order', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('print')->nullable();
            $table->string('type')->nullable();
            $table->string('sales_budget')->nullable();
            $table->string('document_number')->nullable();
            $table->string('transaction_number')->nullable();
            $table->string('name')->nullable();
            $table->string('account')->nullable();
            $table->string('status')->nullable();
            $table->string('amount')->nullable();
            $table->string('date_created')->nullable();
            $table->string('document_number_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_sales_order');
    }
};
