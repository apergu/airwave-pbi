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
        Schema::create('sales_budget', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('print')->nullable();
            $table->string('type')->nullable();
            $table->string('document_number')->nullable();
            $table->string('transaction_number')->nullable();
            $table->string('name')->nullable();
            $table->string('account')->nullable();
            $table->string('approval_status')->nullable();
            $table->string('status')->nullable();
            $table->string('memo')->nullable();
            $table->string('amount')->nullable();
            $table->string('date_created')->nullable();
            $table->string('internal_id')->nullable();
            $table->string('id')->nullable();
            $table->string('project_name')->nullable();
            $table->string('opportunity')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_budget');
    }
};
