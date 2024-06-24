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
        Schema::create('accounting_cogs', function (Blueprint $table) {
            $table->id();
            $table->string('document_number')->nullable();
            $table->string('account')->nullable();
            $table->string('project_id')->nullable();
            $table->string('sum_of_amount')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounting_cogs');
    }
};
