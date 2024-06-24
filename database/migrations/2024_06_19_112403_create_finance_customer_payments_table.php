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
        Schema::create('finance_customer_payments', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_number')->nullable();
            $table->string('transaction_number')->nullable();
            $table->string('customer')->nullable();
            $table->string('account')->nullable();
            $table->string('invoice_no')->nullable();
            $table->string('status')->nullable();
            $table->string('amount')->nullable();
            $table->string('date_invoice')->nullable();
            $table->string('date_created')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finance_customer_payments');
    }
};
