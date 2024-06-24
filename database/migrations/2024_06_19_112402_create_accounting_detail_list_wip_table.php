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
        Schema::create('accounting_detail_list_wip', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('account')->nullable();
            $table->string('document_number')->nullable();
            $table->string('expense_category')->nullable();
            $table->string('material_cheque_pid')->nullable();
            $table->string('expense_report_pid')->nullable();
            $table->string('memo')->nullable();
            $table->string('amount')->nullable();
            $table->string('status')->nullable();
            $table->string('approval_status_ia')->nullable();
            $table->string('employee')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounting_detail_list_wip');
    }
};
