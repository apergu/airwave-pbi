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
        Schema::create('payment_request_custom', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('project_id')->nullable();
            $table->string('name')->nullable();
            $table->string('document_number')->nullable();
            $table->string('memo')->nullable();
            $table->string('advance_to_apply')->nullable();
            $table->string('amount_net')->nullable();
            $table->string('approval_status')->nullable();
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
        Schema::dropIfExists('payment_request_custom');
    }
};
