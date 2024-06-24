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
        Schema::create('payment_request', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('due_date')->nullable();
            $table->string('transaction_number')->nullable();
            $table->string('write_cheque_ref')->nullable();
            $table->string('requestor_adv_pay')->nullable();
            $table->string('memo')->nullable();
            $table->string('amount')->nullable();
            $table->string('approval_status')->nullable();
            $table->string('status')->nullable();
            $table->string('pp_paid')->nullable();
            $table->string('date_created')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_request');
    }
};
