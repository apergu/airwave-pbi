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
        Schema::create('prepayment_v2', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('custom_form')->nullable();
            $table->string('document_number')->nullable();
            $table->string('po_number')->nullable();
            $table->string('name')->nullable();
            $table->string('account')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('prepayment_v2');
    }
};
