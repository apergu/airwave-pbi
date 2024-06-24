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
        Schema::create('sales_detail_list_so', function (Blueprint $table) {
            $table->id();
            $table->string('project_id')->nullable();
            $table->string('sales_order_no')->nullable();
            $table->string('item')->nullable();
            $table->string('item_code')->nullable();
            $table->string('category')->nullable();
            $table->string('activity_code')->nullable();
            $table->string('sum_of_qty')->nullable();
            $table->string('units')->nullable();
            $table->string('sum_of_rate')->nullable();
            $table->string('sum_of_amount')->nullable();
            $table->string('memo')->nullable();
            $table->string('tax_item')->nullable();
            $table->string('date_so')->nullable();
            $table->string('date_closed')->nullable();
            $table->string('customer')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_detail_list_so');
    }
};
