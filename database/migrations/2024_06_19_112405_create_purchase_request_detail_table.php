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
        Schema::create('purchase_request_detail', function (Blueprint $table) {
            $table->id();
            $table->string('purchase_request_no')->nullable();
            $table->string('item_code')->nullable();
            $table->string('item')->nullable();
            $table->string('qty')->nullable();
            $table->string('units')->nullable();
            $table->string('so_ref')->nullable();
            $table->string('pr_type')->nullable();
            $table->string('project_id')->nullable();
            $table->string('category')->nullable();
            $table->string('activity_code')->nullable();
            $table->string('memo')->nullable();
            $table->string('date_pr')->nullable();
            $table->string('expected_receipt_date')->nullable();
            $table->string('status')->nullable();
            $table->string('name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_request_detail');
    }
};
