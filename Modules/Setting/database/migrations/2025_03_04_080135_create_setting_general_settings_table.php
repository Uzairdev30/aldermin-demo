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
        Schema::create('setting_general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('school_name', 50);
            $table->string('school_address', 200)->nullable();
            $table->string('school_phone', 20)->nullable();
            $table->string('school_email', 50)->nullable();
            $table->string('school_website', 200)->nullable();
            $table->string('institution_type', 30);
            $table->string('attendance_type', 30);
            $table->string('start_day_of_week', 15);
            $table->string('date_format', 20);
            $table->string('date_separator', 10);
            $table->unsignedBigInteger('language_id');
            $table->unsignedBigInteger('timezone_id');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('currency_code_id');
            $table->string('currency_symbol', 10);
            $table->integer('precision_count')->nullable(false);
            $table->string('logo_file_path', 200)->nullable();
            
            // $table->unsignedBigInteger('grading_systems');
            
            $table->string('theme', 200)->nullable();
            $table->string('font_family', 200)->nullable();
            $table->string('bg_img_for_login', 200)->nullable();
            $table->string('default_sorting_order_for_app', 100)->nullable();
            $table->integer('enable_auto_increment_admission_no')->default(1);
            $table->integer('enable_news_comment_moderation')->default(0);
            $table->integer('enable_sibling')->default(0);
            $table->integer('enable_password_change_at_first_login')->default(0);
            $table->integer('enable_roll_no_for_students')->default(0);
            $table->integer('enable_google_sso')->default(0);
            $table->integer('enable_auto_logout')->default(0);
            $table->integer('enable_program')->default(0);
            
            $table->string('package_name', 100)->nullable();
            $table->date('package_expiry')->nullable();
            $table->integer('is_expired')->default(0);
            
            $table->integer('is_active')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting_general_settings');
    }
};
