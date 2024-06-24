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
        Schema::create('inventory_adj_finance_accounting', function (Blueprint $table) {
            $table->id();
            $table->string('document_number')->nullable();
            $table->string('sales_budget_ref')->nullable();
            $table->string('main_line_name')->nullable();
            $table->string('memo')->nullable();
            $table->string('item_category')->nullable();
            $table->string('approval_status_ia')->nullable();
            $table->string('account_main')->nullable();
            $table->string('date_created')->nullable();
            $table->string('amount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_adj_finance_accounting');
    }
};
