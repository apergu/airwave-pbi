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
        Schema::create('master_item', function (Blueprint $table) {
            $table->id();
            $table->string('internal_id')->nullable();
            $table->string('name')->nullable();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->string('type')->nullable();
            $table->string('base_price')->nullable();
            $table->string('average_cost')->nullable();
            $table->string('primary_units_type')->nullable();
            $table->string('category_1')->nullable();
            $table->string('category_2')->nullable();
            $table->string('category_3')->nullable();
            $table->string('purchase_price')->nullable();
            $table->string('last_purchase_price')->nullable();
            $table->string('expense_cogs_account')->nullable();
            $table->string('asset_account')->nullable();
            $table->string('income_account')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_item');
    }
};
