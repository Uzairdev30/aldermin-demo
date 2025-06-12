<?php

namespace Modules\Setting\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Setting\Models\Language;

class SettingLanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Language::create([
            'language_name' => 'English', 
            'language_code' => 'en', 
            'direction' => 'ltr'
        ]);
    }
}
