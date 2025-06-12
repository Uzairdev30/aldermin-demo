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
        Schema::create('setting_enabled_grading_systems', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('grading_system_id');
            $table->unsignedBigInteger('branch_id'); //general setting id
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting_enabled_grading_systems');
    }
};
