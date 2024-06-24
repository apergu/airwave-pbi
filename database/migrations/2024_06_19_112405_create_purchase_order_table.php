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
        Schema::create('purchase_order', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('document_number')->nullable();
            $table->string('sb_ref')->nullable();
            $table->string('name')->nullable();
            $table->string('account')->nullable();
            $table->string('ns_status')->nullable();
            $table->string('document_status')->nullable();
            $table->string('approval_status')->nullable();
            $table->string('memo')->nullable();
            $table->string('amount')->nullable();
            $table->string('po_type')->nullable();
            $table->string('date_created')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_order');
    }
};
