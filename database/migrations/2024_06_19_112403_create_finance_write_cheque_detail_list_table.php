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
        Schema::create('finance_write_cheque_detail_list', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('transaction_number')->nullable();
            $table->string('expense_category')->nullable();
            $table->string('project_id')->nullable();
            $table->string('activity_code')->nullable();
            $table->string('department')->nullable();
            $table->string('account')->nullable();
            $table->string('memo')->nullable();
            $table->string('amount')->nullable();
            $table->string('date_created')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finance_write_cheque_detail_list');
    }
};
