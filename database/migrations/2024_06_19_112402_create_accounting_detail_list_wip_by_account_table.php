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
        Schema::create('accounting_detail_list_wip_by_account', function (Blueprint $table) {
            $table->id();
            $table->string('material_cheque_bill_pid')->nullable();
            $table->string('expense_report_pid')->nullable();
            $table->string('item_receipt')->nullable();
            $table->string('account')->nullable();
            $table->string('sum_of_amount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounting_detail_list_wip_by_account');
    }
};
