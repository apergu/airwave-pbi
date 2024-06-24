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
        Schema::create('journal_entry', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('document_number')->nullable();
            $table->string('posting')->nullable();
            $table->string('amount')->nullable();
            $table->string('memo')->nullable();
            $table->string('approval_status')->nullable();
            $table->string('amount_credit')->nullable();
            $table->string('amount_debit')->nullable();
            $table->string('amount_gross')->nullable();
            $table->string('date_created')->nullable();
            $table->string('status')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journal_entry');
    }
};
