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
        Schema::create('logistic_detail_serial_lot_material_stock', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('display_name')->nullable();
            $table->string('category')->nullable();
            $table->string('sub_category')->nullable();
            $table->string('label_material')->nullable();
            $table->string('location')->nullable();
            $table->string('uom')->nullable();
            $table->string('on_hand')->nullable();
            $table->string('on_order')->nullable();
            $table->string('available')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logistic_detail_serial_lot_material_stock');
    }
};
