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
        Schema::create('procurement_detail_list_po', function (Blueprint $table) {
            $table->id();
            $table->string('item')->nullable();
            $table->string('item_code')->nullable();
            $table->string('category')->nullable();
            $table->string('qty')->nullable();
            $table->string('units')->nullable();
            $table->string('rate')->nullable();
            $table->string('amount')->nullable();
            $table->string('purchase_order_no')->nullable();
            $table->string('purchase_request_no')->nullable();
            $table->string('vendor_name')->nullable();
            $table->string('tax_item')->nullable();
            $table->string('date_po')->nullable();
            $table->string('date_closed')->nullable();
            $table->string('status')->nullable();
            $table->string('project_id')->nullable();
            $table->string('po_type')->nullable();
            $table->string('sb_ref')->nullable();
            $table->string('fulfilling_receiving_transaction')->nullable();
            $table->string('expected_receipt_date')->nullable();
            $table->string('actual_ship_receipt_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('procurement_detail_list_po');
    }
};
