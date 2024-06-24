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
        Schema::create('project_material_req_detail', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('item')->nullable();
            $table->string('maximum_of_mr')->nullable();
            $table->string('units')->nullable();
            $table->string('material_request_no')->nullable();
            $table->string('status')->nullable();
            $table->string('project_id')->nullable();
            $table->string('activity_code')->nullable();
            $table->string('date_created')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_material_req_detail');
    }
};
