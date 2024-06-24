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
        Schema::create('cheque', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('document_number')->nullable();
            $table->string('transaction_number')->nullable();
            $table->string('name')->nullable();
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
        Schema::dropIfExists('cheque');
    }
};
