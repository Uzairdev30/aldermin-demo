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
        Schema::create('setting_academic_years', function (Blueprint $table) {
            $table->id(); // Equivalent to `id` int NOT NULL AUTO_INCREMENT
            $table->string('academic_year_name', 30); // varchar(30) NOT NULL
            $table->date('start_date'); // date NOT NULL
            $table->date('end_date'); // date NOT NULL
            $table->integer('is_current_year'); // int NOT NULL
            $table->integer('active'); // int NOT NULL
            $table->unsignedBigInteger('branch_id');
            $table->timestamps(); // Optional: Adds `created_at` and `updated_at` columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting_academic_years');
    }
};
